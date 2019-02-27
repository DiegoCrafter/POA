<?php

use Illuminate\Database\Seeder;
use App\Document;

class DocumentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $document = new Document();
        $document->document_name="PDF Prueba";
        $document->id_schedule=1;
        $document->document_description="This one for u";
        $document->document_file="https://www.antennahouse.com/XSLsample/pdf/sample-link_1.pdf";
        $document->save();

        $document = new Document();
        $document->document_name="PDF Prueba 2";
        $document->id_schedule=1;
        $document->document_description="This one for u";
        $document->document_file="https://www.antennahouse.com/XSLsample/pdf/sample-link_1.pdf";
        $document->save();
    }
}
