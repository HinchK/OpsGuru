<?php namespace OpsGuru\Providers;


use Laravel\Socialite\Two\AbstractProvider;
use Laravel\Socialite\Two\ProviderInterface;
use Laravel\Socialite\Two\User;

class FoxyApiProvider extends AbstractProvider implements ProviderInterface
{

    /**
     * Scopes
     *
     * @var string
     */
    const SCOPE_CLIENT = 'client_full_access';
    const SCOPE_USER = 'user_full_access';
    const SCOPE_STORE = 'store_full_access';

    protected $scopes = ['client_full_access'];

    /**
     * Get the authentication URL for the provider.
     *
     * @param  string $state
     * @return string
     */
    protected function getAuthUrl($state)
    {
        return $this->buildAuthUrlFromBase('https://my-sandbox.foxycart.com/authorize', $state);
    }

    /**
     * Get the token URL for the provider.
     *
     * @return string
     */
    protected function getTokenUrl()
    {
        return 'https://my-sandbox.foxycart.com/token';
    }

    /**
     * {@inheritdoc}
     */
    public function getAccessToken($code)
    {
        $response = $this->getHttpClient()->get($this->getTokenUrl(), [
            'headers' => ['Authorization' => 'Basic ' . base64_encode($this->clientId . ':' . $this->clientSecret),
                          'FOXYCART-API-VERSION' => '1'],
            'body'    => $this->getTokenFields($code),
        ]);
        dd($response);

        return $this->parseAccessToken($response->getBody());
    }

    /**
     * {@inheritdoc}
     */
    protected function getTokenFields($code)
    {
        return array_add(
            parent::getTokenFields($code), 'grant_type', 'refresh_token'
        );
    }

    protected function createUserByToken($token)
    {
        $response = $this->getHttpClient()->post('https://api-sandbox.foxycart.com/users',[
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
                'CONTENT_TYPE' => 'application/json',
                'FOXYCART-API-VERSION' => '1'
            ],
        ]);

        return json_encode($response->getBody(), true);
    }

    /**
     * Get the raw user for the given access token.
     *
     * @param  string $token
     * @return array
     */
    protected function getUserByToken($token)
    {

        $response = $this->getHttpClient()->get('https://api-sandbox.foxycart.com/client', [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
                'CONTENT_TYPE' => 'application/json',
                'FOXYCART-API-VERSION' => '1'
            ],
        ]);

        dd($response);

        return json_decode($response->getBody(), true);
    }

    /**
     * {@inheritdoc}
     */
//    protected function formatScopes(array $scopes)
//    {
//        return implode(' ', $scopes);
//    }

    /**
     * Map the raw user array to a Socialite User instance.
     *
     * @param  array $user
     * @return \Laravel\Socialite\Two\User
     */
    protected function mapUserToObject(array $user)
    {
        return (new User)->setRaw($user)->map([
            'id'       => $user['id'],
            'nickname' => $user['display_name'],
            'name'     => $user['display_name'],
            'avatar'   => !empty($user['images']) ? $user['images'][0]['url'] : null,
        ]);
    }
}
