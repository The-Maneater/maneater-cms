<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'manage-stories',
            'display_name' => 'Story: Create/Edit/Delete/List'
        ]);

        Permission::create([
            'name' => 'manage-ads',
            'display_name' => 'Ad: Create/Edit/Delete/List'
        ]);

        Permission::create([
            'name' => 'manage-classifieds',
            'display_name' => 'Classified: Create/Edit/Delete/List'
        ]);

        Permission::create([
            'name' => 'manage-events',
            'display_name' => 'Event: Create/Edit/Delete/List'
        ]);

        Permission::create([
            'name' => 'manage-graphics',
            'display_name' => 'Graphic: Create/Edit/Delete/List'
        ]);

        Permission::create([
            'name' => 'manage-issues',
            'display_name' => 'Issue: Create/Edit/Delete/List'
        ]);

        Permission::create([
            'name' => 'manage-layouts',
            'display_name' => 'Layout: Create/Edit/Delete/List'
        ]);

        Permission::create([
            'name' => 'manage-photos',
            'display_name' => 'Photo: Create/Edit/Delete/List'
        ]);

        Permission::create([
            'name' => 'manage-polls',
            'display_name' => 'Poll: Create/Edit/Delete/List'
        ]);

        Permission::create([
            'name' => 'manage-positions',
            'display_name' => 'Position: Create/Edit/Delete/List'
        ]);

        Permission::create([
            'name' => 'manage-publications',
            'display_name' => 'Publication: Create/Edit/Delete/List'
        ]);

        Permission::create([
            'name' => 'mange-roles',
            'display_name' => 'Role: Create/Edit/Delete/List'
        ]);

        Permission::create([
            'name' => 'manage-sections',
            'display_name' => 'Section: Create/Edit/Delete/List'
        ]);

        Permission::create([
            'name' => 'manage-special-sections',
            'display_name' => 'Special Section: Create/Edit/Delete/List'
        ]);

        Permission::create([
            'name' => 'manage-staffers',
            'display_name' => 'Staffer: Create/Edit/Delete/List'
        ]);

        Permission::create([
            'name' => 'manage-tags',
            'display_name' => 'Tag: Create/Edit/Delete/List'
        ]);

        Permission::create([
            'name' => 'manage-users',
            'display_name' => 'User: Create/Edit/Delete/List'
        ]);

        Permission::create([
            'name' => 'manage-volumes',
            'display_name' => 'Volume: Create/Edit/Delete/List'
        ]);

        Permission::create([
            'name' => 'manage-webfronts',
            'display_name' => 'Webfront: Create/Edit/Delete/List'
        ]);

        Permission::create([
            'name' => 'manage-site',
            'display_name' => 'Website: Alter Menus/Layouts'
        ]);

        Permission::create([
            'name' => 'manage-social',
            'display_name' => 'Social: Manage Accounts'
        ]);

        Permission::create([
            'name' => 'manage-flatpages',
            'display_name' => 'Admin: Manage Flatpages'
        ]);
    }
}
