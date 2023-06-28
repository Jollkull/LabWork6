<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('tour_name');
            $table->float('tour_price');
            $table->string('tour_img');
            $table->string('tour_text');
        });

        DB::table('tours')->insert([
            [
                'tour_name' => 'Варшава',
                'tour_price' => 35000,
                'tour_text' => 'Королівський замок, Старе місто, Історичний музей варшави',
                'tour_img' => 'img/tour_1.png',
            ],
            [
                'tour_name' => 'Влоцлавек',
                'tour_price' => 40000,
                'tour_text' => 'Бурштиновий Палац',
                'tour_img' => 'img/tour_2.png',
            ],
            [
                'tour_name' => 'Познань',
                'tour_price' => 30000,
                'tour_text' => 'Парк-Цитадель, Стара Ринкова Площа, Пальмовий Дім',
                'tour_img' => 'img/tour_3.png',
            ],
            [
                'tour_name' => 'Мальборк',
                'tour_price' => 46000,
                'tour_text' => 'Маріенбурзький Замок',
                'tour_img' => 'img/tour_4.png',
            ],
            [
                'tour_name' => 'Вавель',
                'tour_price' => 40000,
                'tour_text' => 'Вавельський замок, Кафедральний собор',
                'tour_img' => 'img/tour_5.png',
            ],
            [
                'tour_name' => 'Смолдзiно',
                'tour_price' => 32000,
                'tour_text' => 'Словинський національний Парк, Ока Дюна',
                'tour_img' => 'img/tour_6.png',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
