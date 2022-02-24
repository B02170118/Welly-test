<?php
const userIds = ['U01', 'U02', 'U03'];
const orderIds = ['T01', 'T02', 'T03', 'T04'];

const userOrders = [			
    [ 'userId'=> 'U01', 'orderIds'=> ['T01', 'T02'] ],
    [ 'userId'=> 'U02', 'orderIds'=> [] ],
    [ 'userId'=> 'U03', 'orderIds'=> ['T03'] ],
];
const userData = [ 'U01'=> 'Tom', 'U02'=> 'Sam', 'U03'=> 'John' ];
const orderData = [						
    'T01'=> [ 'name'=> 'A', 'price'=> 499 ], 
    'T02'=> [ 'name'=> 'B', 'price'=> 599 ],
    'T03'=> [ 'name'=> 'C', 'price'=> 699 ], 
    'T04'=> [ 'name'=> 'D', 'price'=> 799 ]
];

function test3() {
    $result = [];
    foreach (userIds as $value) {
        $temp = [];
        $userid = $value;
        foreach (userData as $key => $value2) {
            if ($userid == $key) {
                $name = $value2;
                $temp ['user']['id'] = $userid;
                $temp ['user']['name'] = $name;   
                foreach (userOrders as $row) {
                    if ($row['userId'] == $userid) {
                        $orderIds = $row['orderIds'];
                        foreach ($orderIds as $orderid) {
                            $name = orderData[$orderid]['name'];
                            $price = orderData[$orderid]['price'];
                            $temp ['orders'][] = [ 'id'=> $orderid, 'name'=> $name, 'price'=> $price];
                        }
                    }
                }
            }
        }
        $result[] = $temp;
    }
    print_r(json_encode($result));
}
/*
const result = [ 
    [
        user: [ id: 'U01', name: 'Tom' ], 
        orders: [
            [ id: 'T01', name: 'A', price: 499 ],
            [ id: 'T02', name: 'B', price: 599 ], 
    ],
    ]
]
*/