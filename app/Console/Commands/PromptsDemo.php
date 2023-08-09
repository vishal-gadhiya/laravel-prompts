<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use function Laravel\Prompts\text;
use function Laravel\Prompts\password;
use function Laravel\Prompts\confirm;
use function Laravel\Prompts\select;
use function Laravel\Prompts\multiselect;
use function Laravel\Prompts\suggest;
use function Laravel\Prompts\search;

class PromptsDemo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'prompts:demo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'A demo of the new Laravel Prompts';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        /*
         * Ask
         */
        /*$name = $this->ask('What is your name?');
        dd($name);*/


        /*
         * Text
         */
        /*$name = text('What is your name?');
        dd($name);*/


        /*
         * Placeholder text, default value and required
         */
        /*$name = text(
            label: 'What is your name?',
            placeholder: 'E.g. Taylor Otwell',
            //default: 'Vishal',
            //required: true
            //required: 'Your name is required.'
        );
        dd($name);*/


        /*
         * Additional Validation
         */
        /*$name = text(
            label: 'What is your name?',
            validate: fn (string $value) => match (true) {
                strlen($value) < 3 => 'The name must be at least 3 characters.',
                strlen($value) > 255 => 'The name must not exceed 255 characters.',
                default => null
            }
        );
        dd($name);*/


        /*
         * Password
         */
        /*$password = $this->secret('What is the password?');
        //$password = password('What is your password?');
        $password = password(
            label: 'What is your password?',
            required: true,
        );
        dd($password);*/


        /*
         * Confirmation
         */
        //$confirmed = $this->confirm('Do you wish to continue?');

        //$confirmed = confirm('Do you accept the terms?');

        /*$confirmed = confirm(
            label: 'Do you accept the terms?',
            default: false,
            yes: 'I accept',
            no: 'I decline',
            //required: true
        );
        dd($confirmed);*/


        /*
         * choices
         */
        /*$name = $this->choice(
            'What is your name?',
            [
                'Taylor',
                'Dayle',
                'Jess',
                'Mike'
            ]
        );
        dd($name);*/

        /*$role = select(
            'What role should the user have?',
            options: [
                'member' => 'Member',
                'contributor' => 'Contributor',
                'owner' => 'Owner',
                'manager' => 'Manager',
                'supervisor' => 'Supervisor',
                'admin' => 'Admin',
                'developer' => 'Developer'
            ],
            default: 'owner',
        );
        dd($role);*/

        /*
         * multi choices
         */
        /*$name = $this->choice(
            'What is your name?',
            [
                'Taylor',
                'Dayle',
                'Jess',
                'Mike',
                'John'
            ],
            multiple: true
        );
        dd($name);*/

        /*$permissions = multiselect(
            label: 'What permissions should be assigned?',
            options: ['Read', 'Create', 'Update', 'Delete'],
            //default: ['Read', 'Create'],
            //required: true
        );
        dd($permissions);*/

        /*
         * Auto-Completion
         */
        /*$name = $this->anticipate('What is your name?',
            [
                'Taylor',
                'Dayle',
                'Jess',
                'Mike',
                'John'
            ]
        );
        dd($name);*/

        /*$name = suggest('What is your name?',
            [
                'Taylor',
                'Dayle',
                'Jess',
                'Mike',
                'John'
            ]
        );
        dd($name);*/

        /*
         * Search
         */
        /*$id = search(
            'Search for the user that should receive the mail',
            fn (string $value) => strlen($value) > 0
                ? User::where('name', 'like', "%{$value}%")->pluck('name', 'id')->all()
                : []
        );
        dd($id);*/

    }
}
