<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Permission extends Model implements TranslatableContract
{
    /** @use HasFactory<\Database\Factories\PermissionFactory> */
    use Translatable, HasFactory;

    public $translatedAttributes = ['name'];

    protected $fillable = [ 'key' , 'table_name'];

    public function role()
    {
        return $this->belongsToMany(Role::class);
    }


    public static function generateFor($table_name)
    {
        self::firstOrCreate(['key' => 'browse_'.$table_name, 'table_name' => $table_name]);
        self::firstOrCreate(['key' => 'read_'.$table_name, 'table_name' => $table_name]);
        self::firstOrCreate(['key' => 'edit_'.$table_name, 'table_name' => $table_name]);
        self::firstOrCreate(['key' => 'add_'.$table_name, 'table_name' => $table_name]);
        self::firstOrCreate(['key' => 'delete_'.$table_name, 'table_name' => $table_name]);
        self::firstOrCreate(['key' => 'restore_'.$table_name, 'table_name' => $table_name]);
        self::firstOrCreate(['key' => 'forceDelete_'.$table_name, 'table_name' => $table_name]);

        $idBrowse = Permission::where('key', 'browse_'.$table_name)->first();
        $idRead = Permission::where('key', 'read_'.$table_name)->first();
        $idEdit = Permission::where('key', 'edit_'.$table_name)->first();
        $idAdd = Permission::where('key', 'add_'.$table_name)->first();
        $idDelete = Permission::where('key', 'delete_'.$table_name)->first();
        $idRestore = Permission::where('key', 'restore_'.$table_name)->first();
        $idForce = Permission::where('key', 'forceDelete_'.$table_name)->first();
           PermissionTranslation::updateOrInsert(['permission_id' => $idBrowse->id,  'locale' => 'en'],['name'=>'Browse '.$table_name]);
           PermissionTranslation::updateOrInsert(['permission_id' => $idRead->id,  'locale' => 'en'],['name'=>'Read '.$table_name]);
           PermissionTranslation::updateOrInsert(['permission_id' => $idEdit->id,  'locale' => 'en'],['name'=>'Edit '.$table_name]);
           PermissionTranslation::updateOrInsert(['permission_id' => $idAdd->id,  'locale' => 'en'],['name'=>'Add '.$table_name]);
           PermissionTranslation::updateOrInsert(['permission_id' => $idDelete->id,  'locale' => 'en'],['name'=>'Delete '.$table_name]);
           PermissionTranslation::updateOrInsert(['permission_id' => $idRestore->id,  'locale' => 'en'],['name'=>'Restore '.$table_name]);
           PermissionTranslation::updateOrInsert(['permission_id' => $idForce->id,  'locale' => 'en'],['name'=>'Force Delete '.$table_name]);
    }

    public static function generateForar($table_name, $table_name_en)
    {
        
        $idBrowse = Permission::where('key', 'browse_'.$table_name_en)->first();
        $idRead = Permission::where('key', 'read_'.$table_name_en)->first();
        $idEdit = Permission::where('key', 'edit_'.$table_name_en)->first();
        $idAdd = Permission::where('key', 'add_'.$table_name_en)->first();
        $idDelete = Permission::where('key', 'delete_'.$table_name_en)->first();
        $idRestore = Permission::where('key', 'restore_'.$table_name_en)->first();
        $idForce = Permission::where('key', 'forceDelete_'.$table_name_en)->first();
           PermissionTranslation::updateOrInsert(['permission_id' => $idBrowse->id,  'locale' => 'ar'],['name'=>'عرض '.$table_name]);
           PermissionTranslation::updateOrInsert(['permission_id' => $idRead->id,  'locale' => 'ar'],['name'=>'قراءة '.$table_name]);
           PermissionTranslation::updateOrInsert(['permission_id' => $idEdit->id,  'locale' => 'ar'],['name'=>'تعديل '.$table_name]);
           PermissionTranslation::updateOrInsert(['permission_id' => $idAdd->id,  'locale' => 'ar'],['name'=>'اضافة '.$table_name]);
           PermissionTranslation::updateOrInsert(['permission_id' => $idDelete->id,  'locale' => 'ar'],['name'=>'حذف '.$table_name]);
           PermissionTranslation::updateOrInsert(['permission_id' => $idRestore->id,  'locale' => 'ar'],['name'=>'اعادة المحذوف '.$table_name]);
           PermissionTranslation::updateOrInsert(['permission_id' => $idForce->id,  'locale' => 'ar'],['name'=>'حذف مؤقت'.$table_name]);
    }


    public static function removeFrom($table_name)
    {
        self::where(['table_name' => $table_name])->delete();
    }
}
