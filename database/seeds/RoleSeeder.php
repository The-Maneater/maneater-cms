<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Permission;
use App\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $story = Permission::where('name', 'manage-stories')->first();
        $ad = Permission::where('name', 'manage-ads')->first();
        $classified = Permission::where('name', 'manage-classifieds')->first();
        $event = Permission::where('name', 'manage-events')->first();
        $graphic = Permission::where('name', 'manage-graphics')->first();
        $issue = Permission::where('name', 'manage-issues')->first();
        $layout = Permission::where('name', 'manage-layouts')->first();
        $photo = Permission::where('name', 'manage-photos')->first();
        $poll = Permission::where('name', 'manage-polls')->first();
        $position = Permission::where('name', 'manage-positions')->first();
        $publication = Permission::where('name', 'manage-publications')->first();
        $section = Permission::where('name', 'manage-sections')->first();
        $specialSection = Permission::where('name', 'manage-special-sections')->first();
        $staffer = Permission::where('name', 'manage-staffers')->first();
        $tag = Permission::where('name', 'manage-tags')->first();
        $user = Permission::where('name', 'manage-users')->first();
        $volume = Permission::where('name', 'manage-volumes')->first();
        $webfront = Permission::where('name', 'manage-webfronts')->first();
        $site = Permission::where('name', 'manage-site')->first();
        $social = Permission::where('name', 'manage-social')->first();
        $flatpages = Permission::where('name', 'manage-flatpages')->first();


        $exec = Role::create([
            'name' => 'exec',
            'display_name' => 'Executive Board'
        ]);
        $exec->attachPermissions([
            $story,
            $ad,
            $classified,
            $event,
            $graphic,
            $issue,
            $layout,
            $photo,
            $poll,
            $position,
            $publication,
            $section,
            $specialSection,
            $staffer,
            $tag,
            $user,
            $volume,
            $webfront,
            $site,
            $social,
            $flatpages
            ]);

        $edBoard = Role::create([
            'name' => 'ed-board',
            'display_name' => 'Editorial Board'
        ]);

        $edBoard->attachPermissions([
            $story,
            $event,
            $photo,
            $poll,
            $staffer,
            $tag,
            $webfront
        ]);

        $businessManager = Role::create([
           'name' => 'business-manager',
            'display_name' => 'Business Manager'
        ]);

        $businessManager->attachPermissions([
            $ad,
            $classified
        ]);

        $businessStaff = Role::create([
           'name' => 'business_staff',
            'display_name' => 'Business Staff'
        ]);

        $businessStaff->attachPermissions([
            $ad,
            $classified
        ]);

        $visualStaff = Role::create([
            'name' => 'visual-staff',
            'display_name' => 'Visual Staff'
        ]);

        $visualStaff->attachPermissions([
            $photo,
            $graphic,
            $tag
        ]);

        $super = Role::create([
            'name' => 'super',
            'display_name' => 'Super'
        ]);

        $super->attachPermissions([
            $story,
            $ad,
            $classified,
            $event,
            $graphic,
            $issue,
            $layout,
            $photo,
            $poll,
            $position,
            $publication,
            $section,
            $specialSection,
            $staffer,
            $tag,
            $user,
            $volume,
            $webfront,
            $site,
            $social,
            $flatpages
        ]);

        $socialManager = Role::create([
            'name' => 'social-media-manager',
            'display_name' => 'Social Media Manager'
        ]);

        $socialManager->attachPermissions([
           $social
        ]);

        User::first()->attachRole($super);
    }
}
