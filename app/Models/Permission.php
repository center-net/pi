<?php

declare(strict_types=1);

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Permission extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;

    /** @var string[] */
    public $translatedAttributes = ['name'];

    /** @var string[] */
    protected $fillable = ['key', 'table_name'];

    public function role(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }

    public static function generateFor(string $tableName): void
    {
        $permissions = [
            'browse_' => 'Browse',
            'read_' => 'Read',
            'edit_' => 'Edit',
            'add_' => 'Add',
            'delete_' => 'Delete',
            'restore_' => 'Restore',
            'forceDelete_' => 'Force Delete',
        ];

        foreach ($permissions as $key => $name) {
            $permission = self::firstOrCreate(['key' => $key . $tableName, 'table_name' => $tableName]);
            PermissionTranslation::updateOrInsert(
                ['permission_id' => $permission->id, 'locale' => 'en'],
                ['name' => $name . ' ' . $tableName]
            );
        }
    }

    public static function generateForAr(string $tableName, string $tableNameEn): void
    {
        $permissions = [
            'browse_' => 'عرض',
            'read_' => 'قراءة',
            'edit_' => 'تعديل',
            'add_' => 'اضافة',
            'delete_' => 'حذف',
            'restore_' => 'اعادة المحذوف',
            'forceDelete_' => 'حذف مؤقت',
        ];

        foreach ($permissions as $key => $name) {
            $permission = self::where('key', $key . $tableNameEn)->first();
            if ($permission) {
                PermissionTranslation::updateOrInsert(
                    ['permission_id' => $permission->id, 'locale' => 'ar'],
                    ['name' => $name . ' ' . $tableName]
                );
            }
        }
    }

    public static function removeFrom(string $tableName): void
    {
        self::where(['table_name' => $tableName])->delete();
    }
}
