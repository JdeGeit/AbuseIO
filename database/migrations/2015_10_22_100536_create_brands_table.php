<?php

use AbuseIO\Models\Brand;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'brands',
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('name', 80)->unique();
                $table->string('company_name', 80);
                $table->string('introduction_text');
                $table->binary('logo');
                $table->integer('account_id');
                $table->timestamps();
                $table->softDeletes();
            }
        );

        $this->addDefaultBrand();
    }

    /**
     * Add the default branding
     */
    public function addDefaultBrand()
    {
        // Always recreate the default branding for the system
        DB::table('brands')->where('id', '=', '1')->delete();

        $brands = [
            [
                'id'                        => 1,
                'name'                      => 'default',
                'company_name'              => 'AbuseIO',
                'introduction_text'         => 'This is an introduction text',
                'logo'                      => Brand::getDefaultLogo(),
                'account_id'                => 1,
                'created_at'                => new DateTime,
                'updated_at'                => new DateTime,
            ],
        ];

        DB::table('brands')->insert($brands);
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('brands');
    }
}
