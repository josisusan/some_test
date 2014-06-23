<?php

class UserTableSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Eloquent::unguard();
    $this->command->info('User Table Seeder Started!');
    DB::table('users')->delete();
    User::create(array(
      'first_name' => 'John',
      'last_name'  => 'Doe',
      'email'      => 'john.doe@hspital.com',
      'password'   => Hash::make('s')

    ));
  }

}