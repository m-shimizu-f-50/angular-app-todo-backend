<?php

namespace Database\Factories;

use App\Models\Todo;
use Illuminate\Database\Eloquent\Factories\Factory;

class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Todo::class;

    public function definition()
    {
        // 利用可能なカテゴリーのリスト
        $categoryChoices = [
            ['name' => 'home', 'displayName' => '家'],
            ['name' => 'home_health', 'displayName' => '病院'],
            ['name' => 'work', 'displayName' => '仕事'],
            ['name' => 'restaurant', 'displayName' => 'ご飯'],
            ['name' => 'local_library', 'displayName' => '学習'],
            ['name' => 'event', 'displayName' => 'その他イベント'],
        ];

        // ランダムにカテゴリーを選択
        $selectedCategory = $this->faker->randomElement($categoryChoices);

        return [
            'status' => $this->faker->numberBetween(0, 1),
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'category' => json_encode($selectedCategory)
        ];
    }
}
