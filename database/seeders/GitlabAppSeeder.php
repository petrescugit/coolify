<?php

namespace Database\Seeders;

use App\Models\GitlabApp;
use App\Models\PrivateKey;
use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GitlabAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $root_team = Team::find(0);
        $private_key_2 = PrivateKey::find(2);
        GitlabApp::create([
            'id' => 1,
            'name' => 'Public GitLab',
            'api_url' => 'https://gitlab.com/api/v4',
            'html_url' => 'https://gitlab.com',
            'is_public' => true,
            'team_id' => $root_team->id,
        ]);
        GitlabApp::create([
            'id' => 2,
            'name' => 'coolify-laravel-development-private-gitlab',
            'api_url' => 'https://gitlab.com/api/v4',
            'html_url' => 'https://gitlab.com',
            'app_id' => 1234,
            'app_secret' => '1234',
            'oauth_id' => 1234,
            'deploy_key_id' => '1234',
            'public_key' => 'dfjasiourj',
            'webhook_token' => '4u3928u4y392',
            'private_key_id' => $private_key_2->id,
            'team_id' => $root_team->id,
        ]);
    }
}
