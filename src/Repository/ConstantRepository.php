<?php
//src/Repository/ConstantRepository.php
namespace App\Repository;

 class ConstantRepository
 {
     private const NEWS = [
         'form-users' => [
             'name' => 'Alejandro',
             'surname' => 'Cabeza',
             'ref_product' => '#5555',
             'city' => 'Sevilla',
             'cp' => 55555,
             'email' => 'el-avor93@test.com'
         ],
         'form-product' => [
             'name_product' => 'Televisor',
             'ref_product' => '#5555'
         ],
        ];

    public function findAll(): iterable
    {
        return array_values(self::NEWS);
    }
    public function findOneBySlug(string $slug): ?array
    {
        return self::NEWS[$slug] ?? null;
    }
 }
?>