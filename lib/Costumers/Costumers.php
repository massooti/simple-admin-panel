<?php
class Costumers
{
    /**
     *
     */
    public function __construct()
    {
    }

    /**
     *
     */
    public function __destruct()
    {
    }
    
    /**
     * Set friendly columns\' names to order tables\' entries
     */
    public function setOrderingValues()
    {
        $ordering = [
            'id' => 'شناسه',
            'f_name' => 'نام',
            'l_name' => 'نام خانوادگی',
            // 'gender' => 'جنسیت',
            // 'phone' => 'موبایل',
            // 'created_at' => 'تاریخ ایجاد',
            // 'updated_at' => 'تاریخ بروز رسانی',
            // 'father' => 'نام پدر',
            // 'code',
            // 'tel'
        ];

        return $ordering;
    }
}
?>
