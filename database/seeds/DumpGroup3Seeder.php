<?php

use App\Http\Controllers\TourBatchImportController;
use App\Tour;
use Illuminate\Database\Seeder;

class DumpGroup3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $this->importArticleBatch('dump/data/341.json');
        $this->dumpPerDirectory('dump/data');
    }

    private function dumpPerDirectory($pathFolder)
    {
        $filesInFolder = File::allFiles($pathFolder);
        foreach ($filesInFolder as $path) {
            try {
                $pathLink = pathinfo($path);
                $link = $pathLink["dirname"] . "/" . $pathLink["basename"];
                $this->importArticleBatch($link);
            } catch (Exception $e) {
                $e->getMessage();
            }
        }
    }

    private function importArticleBatch($filePath)
    {

        $json_path = base_path($filePath);
        $results = json_decode(file_get_contents($json_path), true);
        TourBatchImportController::createOne($results);
    }
}
