<?php

namespace Database\Seeders;

use App\Models\History;
use App\Models\Submission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HistorySeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    // submission contains one pending history
    $pending = Submission::factory()->pending()->create();

    History::factory()->state([
      'submission_id' => $pending->id,
      'user_id' => $pending->user_id,
      'status_id' => $pending->status_id, // Status::PENDING['id']
    ]);

    // submission contains one pending & one approved history
    // submission contains one pending & one rejected history
  }
}
