<?php

declare(strict_types=1);
namespace App\Http\Controllers;

trait NewsTrait
{
    public static function getNews($id = null): array
    {
        $news = [];
        $quantityNews = 10;
        if ($id == null) {
            for ($i = 1; $i < $quantityNews; $i++) {
                $news[$i] = [
                    'id' => $i,
                    'categoryId' => rand(1, 5),
                    'title' => \fake()->jobTitle(),
                    'description' => \fake()->text(100),
                    'author' => \fake()->userName(),
                    'created_at' => \now()->format('d-m-Y H:i'),
                ];
            }

            return $news;
        }

        return [
            'id' => $id,
            'categoryId' => self::getCategories(rand(1, 5)),
            'title' => \fake()->jobTitle(),
            'description' => \fake()->text(100),
            'author' => \fake()->userName(),
            'created_at' => \now()->format('d-m-Y H:i'),
        ];
    }
    public static function getNewsByCategory($categoryId): array
    {
        $news = self::getNews();
        $result = [];
        foreach ($news as $item) {
            if ($categoryId == $item['categoryId']) {
                $result[] = $item;
            }
        }

        return $result;
    }

    public static function getCategories($id = null): array
    {
        $categories = [];
        $quantityNews = 5;
        if ($id == null) {
            for ($i = 1; $i < $quantityNews; $i++) {
                $categories[$i] = [
                    'id' => $i,
                    'title' => \fake()->jobTitle(),
                    'description' => \fake()->text(100),
                ];
            }

            return $categories;
        }

        return [
            'id' => $id,
            'title' => \fake()->jobTitle(),
            'description' => \fake()->text(100),
            'author' => \fake()->userName(),
            'created_at' => \now()->format('d-m-Y H:i'),
        ];
    }
}
