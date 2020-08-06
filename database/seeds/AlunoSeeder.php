
<?php
use App\User;
use App\Aluno;
use Illuminate\Database\Seeder;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Aluno::class, 25)->create();
        User::create([
            'name'      => 'admin@mail.com',
            'email'     => 'admin@mail.com',
            'password'  => bcrypt('123456'),
        ]);
    }
}