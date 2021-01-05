<?php
class Users
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
            'user_name' => 'نام کاریری',
            'admin_type' => 'نقش'
        ];

        return $ordering;
    }
}
?>
