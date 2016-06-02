<?php
namespace App\Helpers;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class MigrationHelper extends Migration
{
	public static function createRefTable($tableName)
	{
        \Schema::create($tableName, function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('type');
        });
	}
}