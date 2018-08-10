<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pembelian".
 *
 * @property integer $id
 * @property integer $id_customer
 * @property string $alamat
 * @property string $kota
 * @property string $provinsi
 * @property integer $kode_pos
 * @property string $no_telp
 * @property string $catatan
 * @property integer $biaya_kirim
 * @property integer $kuantitas
 * @property integer $total
 */
class Pembelian extends \yii\db\ActiveRecord
{    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{pembelian}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_customer', 'alamat', 'kota', 'provinsi', 'no_telp', 'kuantitas'], 'required'],
            [['id_customer', 'kode_pos', 'biaya_kirim', 'kuantitas', 'total'], 'integer'],
            [['alamat', 'catatan'], 'string'],
            [['kota', 'provinsi'], 'string', 'max' => 32],
            [['no_telp'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_customer' => 'ID Customer',
            'alamat' => 'Alamat',
            'kota' => 'Kota',
            'provinsi' => 'Provinsi',
            'kode_pos' => 'Kode Pos',
            'no_telp' => 'No. Telepon/HP',
            'catatan' => 'Catatan',
            'biaya_kirim' => 'Biaya Kirim',
            'kuantitas' => 'Jumlah Buku',
            'total' => 'Total',
        ];
    }
    
    public function setIdCustomer($id_cust)
    {
        $this->id_customer = $id_cust;
    }
    
    public function setBiayaKirim($biaya)
    {
        $this->biaya_kirim = $biaya;
    }
    
    public function setTotal($kuantitas, $biaya)
    {
        $this->total = ($kuantitas * 100000) + $biaya;
    }
}
