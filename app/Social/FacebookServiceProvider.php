<?php

namespace App\Social;

use App\User;

class FacebookServiceProvider extends AbstractServiceProvider
{
   /**
     *  Handle Facebook response
     * 
     *  @return Illuminate\Http\Response
     */
    public function handle()
    {
        // $user = $this->provider->user();

        // echo "<pre>";
        // print_r($user);
        // die;

        $user = $this->provider->fields([
                    'name', 
                    'email', 
                    'id',                  
                ])->user();

        //$existingUser = User::where('settings->facebook_id', $user->id)->first();

        $existingUser = User::where('email', $user->email)->first();
        if ($existingUser) {
            $settings = $existingUser->settings;

            if (! isset($settings['facebook_id'])) {
                $settings['facebook_id'] = $user->id;
                $existingUser->settings = $settings;
                $existingUser->save();
            }

            return $this->login($existingUser);
        }

        $newUser = $this->register([
            'name' => $user->user['name'],
            'email' => $user->email,
            'settings' => [
                'facebook_id' => $user->id,                
            ]
        ]);        
         // echo "<pre>";
         // print_r($newUser);
         // die;
        return $this->login($newUser);
    }       
}