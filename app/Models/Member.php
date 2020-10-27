<?php
namespace App\Models;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Member {

    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'Cai Xukun',
            'age' => '22',
            'city' => 'Hunan',
            'company' => 'personal studio',
            'team play' => 'leader and center',
            'fans name' => 'ikun',
            'image' => 'kun.jpg',
        ],
        '2' => [
            'id' => 2,
            'name' => 'Zhu Zhengting',
            'age' => '24',
            'city' => 'Anhui',
            'company' => 'YUE HUA Entertainment',
            'team play' => 'dance and vocal',
            'fans name' => 'Pearl sugar',
            'image' => 'ting.jpg',
        ],
        '3' => [
            'id' => 3,
            'name' => 'Fan Chengcheng',
            'age' => '20',
            'city' => 'Qingdao',
            'company' => 'YUE HUA Entertainment',
            'team play' => 'rap and dance',
            'fans name' => 'Orange star',
            'image' => 'cheng.jpg',
        ],
        '4' => [
            'id' => 4,
            'name' => 'Huang Minghao',
            'age' => '18',
            'city' => 'Wenzhou',
            'company' => 'YUE HUA Entertainment',
            'team play' => 'rap and dance',
            'fans name' => 'nana',
            'image' => 'justin.jpg',
        ],
        '5' => [
           'id' => 5,
            'name' => 'Lin Yanjun',
            'age' => '25',
            'city' => 'Hainan',
            'company' => 'Banana Culture',
            'team play' => 'rap and vocal',
            'fans name' => 'evanism',
            'image' => 'orange.jpg',
        ],
        '6' => [
           'id' => 6,
            'name' => 'You Zhangjing',
            'age' => '26',
            'city' => 'Malaysia',
            'company' => 'Banana Culture',
            'team play' => 'vocal',
            'fans name' => 'grapefruit',
            'image' => 'you.jpg',
        ],
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}
