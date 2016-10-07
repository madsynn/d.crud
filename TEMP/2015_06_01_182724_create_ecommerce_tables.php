<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEcommerceTables extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id';

                'status';
                'office_status';
                'availability';
                'slug';
                'ispromo';
                'is_published';
                'name';
                'subtitle';
                'manufacturer';
                'details';
                'description';
                'price_heading';
                'features_heading';
                'additional_heading';
                'reviews_heading';
                'waranty_heading';
                'support_heading';
                'docs_heading';
                'price';
                'model';
                'sku';
                'upc';
                'quantity';
                'thumbnail';
                'thumbnail2';
                'thumbnail3';
                'photo_album';
                'pubished_at';
                'video_url';
                'meta_title';
                'meta_description';
                'meta_keywords';
                'facebook_title';
                'google_plus_title';
                'twitter_title';

                $table->enum('filter_class', ['pf-new', 'pf-qn', 'pf-mq', 'pf-hq', 'pf-hoop', 'pf-acc'];

                    'datalayer';
                    'tracking';
                    'reviews_tab';
                    'warranty_tab';
                    'docs_tab';
                    'support_tab';
                    'lang';

                    $table->timestamps(
                        $table->softDeletes(
                        };

                        Schema::create('sections', function (Blueprint $table) {
                            $table->increments('id';

                                'name';
                                $table->text('meta_description';

                                    'slug';

                                    'lang';

                                    $table->timestamps(
                                        $table->engine = 'InnoDB';
                                    };

                                    Schema::create('categories', function (Blueprint $table) {
                                        $table->increments('id';

                                            'title';
                                            $table->unsignedInteger('section_id';

                                                'name';
                                                $table->text('meta_description';

                                                    'slug';

                                                    'lang', 20;

                                                    $table->timestamps(
                                                        $table->engine = 'InnoDB';
                                                        $table->foreign('section_id')->references('id')->on('sections')->onUpdate('cascade')->onDelete('cascade';

                                                        };

                                                        Schema::create('product_variants', function (Blueprint $table) {
                                                            $table->increments('id';
                                                                $table->integer('product_id')->unsigned(

                                                                    'attribute_name';
                                                                    $table->text('product_attribute_value';
                                                                        $table->timestamps(
                                                                            $table->softDeletes(
                                                                                $table->engine = 'InnoDB';
                                                                            }

//        Schema::create('prices', function (Blueprint $table)
                                                                            //        {
                                                                            //            $table->increments('id'
                                                                            //            $table->integer('product_id')->unsigned(
                                                                            //
                                                                            'title'
//            'price', 11, 2
                                                                            //
                                                                            'model', 12
//
                                                                            'sku', 12
//
                                                                            'upc', 13
//            'quantity'
                                                                            //
                                                                            'alt_details'
//            $table->timestamps(
                                                                            //            $table->softDeletes(
                                                                            //            $table->engine = 'InnoDB';
                                                                            //            $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade'
                                                                            //
                                                                            //        }

                                                                            Schema::create('promos', function (Blueprint $table) {
                                                                                $table->increments('id';
                                                                                    $table->integer('product_id')->unsigned(
                                                                                        'price', 11, 2;

                                                                                        'model', 12;

                                                                                        'sku', 12;

                                                                                        'upc', 12;
                                                                                        $table->integer('quantity')->unsigned(
                                                                                            'start_on';
                                                                                            'end_on';
                                                                                            $table->timestamps(
                                                                                                $table->softDeletes(
                                                                                                    $table->engine = 'InnoDB';
                                                                                                };

                                                                                                Schema::create('product_features', function (Blueprint $table) {
                                                                                                    $table->increments('id';
                                                                                                        $table->unsignedInteger('product_id';

                                                                                                            'feature_name';
                                                                                                            'useicon';

                                                                                                            'icon';
                                                                                                            $table->softDeletes(
                                                                                                                $table->timestamps(
                                                                                                                    $table->engine = 'InnoDB';
                                                                                                                    $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade';
                                                                                                                    };

                                                                                                                    Schema::create('options', function (Blueprint $table) {
                                                                                                                        $table->increments('id';
                                                                                                                            $table->unsignedInteger('product_id';

                                                                                                                                'name';
                                                                                                                                $table->timestamps(
                                                                                                                                    $table->engine = 'InnoDB';

                                                                                                                                    $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade';
                                                                                                                                    };

                                                                                                                                    Schema::create('option_values', function (Blueprint $table) {
                                                                                                                                        $table->increments('id';
                                                                                                                                            $table->unsignedInteger('option_id';

                                                                                                                                                'value';
                                                                                                                                                $table->timestamps(
                                                                                                                                                    $table->engine = 'InnoDB';

                                                                                                                                                    $table->foreign('option_id')->references('id')->on('options')->onUpdate('cascade')->onDelete('cascade';
                                                                                                                                                    };

                                                                                                                                                    Schema::create('sub_categories', function (Blueprint $table) {
                                                                                                                                                        $table->increments('id';
                                                                                                                                                            $table->unsignedInteger('parent_id';

                                                                                                                                                                'name';

                                                                                                                                                                'description';

                                                                                                                                                                'parent';
                                                                                                                                                                $table->timestamps(
                                                                                                                                                                    $table->engine = 'InnoDB';
                                                                                                                                                                    $table->foreign('parent_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade';

                                                                                                                                                                    };

                                                                                                                                                                    Schema::create('category_product', function (Blueprint $table) {
                                                                                                                                                                        $table->unsignedInteger('category_id';
                                                                                                                                                                            $table->unsignedInteger('product_id';
                                                                                                                                                                                $table->timestamps(
                                                                                                                                                                                    $table->engine = 'InnoDB';

                                                                                                                                                                                    $table->primary(['category_id', 'product_id'];
                                                                                                                                                                                        $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade';
                                                                                                                                                                                            $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade';
                                                                                                                                                                                            };

                                                                                                                                                                                            Schema::create('product_album', function (Blueprint $table) {
                                                                                                                                                                                                $table->increments('id';
                                                                                                                                                                                                    $table->unsignedInteger('product_id')->unsigned(

                                                                                                                                                                                                        'photo_src'
//
                                                                                                                                                                                                        'alt'
//
                                                                                                                                                                                                        'caption', 60
//
                                                                                                                                                                                                        'photoinfo', 160
//
                                                                                                                                                                                                        'linkto'
//            'use_main'
                                                                                                                                                                                                        //            'use_thumb'
                                                                                                                                                                                                        //            'use_gallery'
                                                                                                                                                                                                        $table->timestamps(
                                                                                                                                                                                                            $table->engine = 'InnoDB';

                                                                                                                                                                                                            $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade';

                                                                                                                                                                                                            };

                                                                                                                                                                                                            Schema::create('reviews', function (Blueprint $table) {
                                                                                                                                                                                                                $table->increments('id';
                                                                                                                                                                                                                    $table->integer('product_id')->unsigned(

                                                                                                                                                                                                                        'name';

                                                                                                                                                                                                                        'email';

                                                                                                                                                                                                                        'review';
                                                                                                                                                                                                                        $table->rememberToken(
                                                                                                                                                                                                                            $table->timestamps(
                                                                                                                                                                                                                                $table->engine = 'InnoDB';
                                                                                                                                                                                                                                $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade';
                                                                                                                                                                                                                                };

                                                                                                                                                                                                                                Schema::create('ecom_pages', function (Blueprint $table) {

                                                                                                                                                                                                                                    'page_title';

                                                                                                                                                                                                                                    'page_name')->primary(
                                                                                                                                                                                                                                    'page_source';
                                                                                                                                                                                                                                    $table->timestamps(
                                                                                                                                                                                                                                    }

//        Schema::create('price_product', function (Blueprint $table) {
                                                                                                                                                                                                                                    //
                                                                                                                                                                                                                                    //            $table->unsignedInteger('price_id'
                                                                                                                                                                                                                                    //            $table->unsignedInteger('product_id'
                                                                                                                                                                                                                                    //            $table->timestamps(
                                                                                                                                                                                                                                    //            $table->engine = 'InnoDB';
                                                                                                                                                                                                                                    //            $table->primary(['price_id', 'product_id']
                                                                                                                                                                                                                                    //            $table->foreign('price_id')->references('id')->on('prices')->onUpdate('cascade')->onDelete('cascade'
                                                                                                                                                                                                                                    //            $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade'
                                                                                                                                                                                                                                    //
                                                                                                                                                                                                                                    //        }

                                                                                                                                                                                                                                    Schema::create('combos', function (Blueprint $table) {
                                                                                                                                                                                                                                        $table->increments('id';

                                                                                                                                                                                                                                            'status';

                                                                                                                                                                                                                                            'office_status';

                                                                                                                                                                                                                                            'availability';
                                                                                                                                                                                                                                            'combo_price', 11, 2;
                                                                                                                                                                                                                                            $table->integer('number_included_products';

                                                                                                                                                                                                                                                'upc', 13;

                                                                                                                                                                                                                                                'sku';

                                                                                                                                                                                                                                                'name';

                                                                                                                                                                                                                                                'subtitle';

                                                                                                                                                                                                                                                'manufacturer';
                                                                                                                                                                                                                                                'details';
                                                                                                                                                                                                                                                'description';

                                                                                                                                                                                                                                                'slug';
                                                                                                                                                                                                                                                'ispromo';
                                                                                                                                                                                                                                                'is_published';

                                                                                                                                                                                                                                                'thumbnail';

                                                                                                                                                                                                                                                'thumbnail2';

                                                                                                                                                                                                                                                'photo_album';
                                                                                                                                                                                                                                                'pubished_at';

                                                                                                                                                                                                                                                'video_url';

                                                                                                                                                                                                                                                'meta_title';

                                                                                                                                                                                                                                                'meta_description';

                                                                                                                                                                                                                                                'facebook_title';

                                                                                                                                                                                                                                                'google_plus_title';

                                                                                                                                                                                                                                                'twitter_title';
                                                                                                                                                                                                                                                $table->timestamps(
                                                                                                                                                                                                                                                    $table->softDeletes(
                                                                                                                                                                                                                                                        $table->engine = 'InnoDB';
                                                                                                                                                                                                                                                    };

                                                                                                                                                                                                                                                    Schema::create('combo_price', function (Blueprint $table) {
                                                                                                                                                                                                                                                        $table->increments('id';

                                                                                                                                                                                                                                                            'price', 11, 2;

                                                                                                                                                                                                                                                            'sku';

                                                                                                                                                                                                                                                            'upc', 13;
                                                                                                                                                                                                                                                            'details';
                                                                                                                                                                                                                                                            $table->integer('product_id')->unsigned(
                                                                                                                                                                                                                                                                $table->integer('combo_id')->unsigned(

                                                                                                                                                                                                                                                                    $table->timestamps(
                                                                                                                                                                                                                                                                        $table->engine = 'InnoDB';

                                                                                                                                                                                                                                                                        $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade';
                                                                                                                                                                                                                                                                            $table->foreign('combo_id')->references('id')->on('combos')->onUpdate('cascade')->onDelete('cascade';
                                                                                                                                                                                                                                                                            };

                                                                                                                                                                                                                                                                        }

                                                                                                                                                                                                                                                                        /**
                                                                                                                                                                                                                                                                         * Reverse the migrations.
                                                                                                                                                                                                                                                                         */
                                                                                                                                                                                                                                                                        public function down()
    {

                                                                                                                                                                                                                                                                            Schema::drop('product_variants';
                                                                                                                                                                                                                                                                                Schema::drop('product_features';
                                                                                                                                                                                                                                                                                    Schema::drop('option_values';
                                                                                                                                                                                                                                                                                        Schema::drop('options';
                                                                                                                                                                                                                                                                                            Schema::drop('sections';
                                                                                                                                                                                                                                                                                                Schema::drop('categories';
                                                                                                                                                                                                                                                                                                    Schema::drop('sub_categories';
                                                                                                                                                                                                                                                                                                        Schema::drop('ecom_pages';
                                                                                                                                                                                                                                                                                                            Schema::drop('price_product';
                                                                                                                                                                                                                                                                                                                Schema::drop('combos';
                                                                                                                                                                                                                                                                                                                    Schema::drop('combo_product';

                                                                                                                                                                                                                                                                                                                        Schema::drop('category_product';
                                                                                                                                                                                                                                                                                                                            Schema::drop('product_album';
                                                                                                                                                                                                                                                                                                                                Schema::drop('reviews';

                                                                                                                                                                                                                                                                                                                                    $table = 'products';
                                                                                                                                                                                                                                                                                                                                    Storage::disk('local')->put($table . '_' . date('Y-m-d_H-i-s') . '.bak', json_encode(DB::table($table)->get());
                                                                                                                                                                                                                                                                                                                                        Schema::drop('products';

                                                                                                                                                                                                                                                                                                                                        }
                                                                                                                                                                                                                                                                                                                                    }
