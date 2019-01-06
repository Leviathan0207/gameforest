<?php
use Migrations\AbstractMigration;

class Init extends AbstractMigration
{
    public function up()
    {
        $this->table('contacts', ['id' => false, 'primary_key' => ['ID']])
            ->addColumn('ID', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('Email', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('Name', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('General', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('Message', 'string', [
                'default' => null,
                'limit' => 500,
                'null' => false,
            ])
            ->create();

        $this->table('posts', ['id' => false, 'primary_key' => ['PostID']])
            ->addColumn('PostID', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('PostTitle', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('PostDate', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('PostAuthor', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('PostContent', 'string', [
                'default' => null,
                'limit' => 1000,
                'null' => true,
            ])
            ->addColumn('PostDesc', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('PostThread', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->create();

        $this->table('users', ['id' => false, 'primary_key' => ['ID']])
            ->addColumn('ID', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 15,
                'null' => false,
            ])
            ->addColumn('Email', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('Username', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('Password', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('token', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addIndex(
                [
                    'Email',
                ],
                ['unique' => true]
            )
            ->create();
    }

    public function down()
    {
        $this->table('contacts')->drop()->save();
        $this->table('posts')->drop()->save();
        $this->table('users')->drop()->save();
    }
}
