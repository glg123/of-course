<?php

namespace App\Apidocs\Endpoints\Order;

use Johnylemon\Apidocs\Facades\Param;
use Johnylemon\Apidocs\Endpoints\Endpoint;

class UpdateOrderStatusEndpoint extends Endpoint
{
    public function describe(): void
    {

        $this->title('Update User  Order Status')
            ->desc('Update User Order Status')
            ->method('POST')
            ->group('order')
            ->headers([
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer {API_TOKEN}',
            ])->body([
                'status' =>  Param::type('string')->example(['delivered','pending','not_delivered']),  
            ]);

            $this->returns(402, [
            'message' => 'unauthenticated',
            ], 'Validation Message');

            $this->returns(200, [
                "data"=> [
                "id"=> 1,
                "tag"=> "Mrs. Martina Leffler",
                "status"=> "pending",
                "comment"=> "comment",
                "price"=> "0.00",
                "discount"=> "0.00",
                "total"=> "0.00",
                "start_at"=> "2022-10-23 13=>08=>52",
                "delivery_cost"=> "20.00",
                "delivery_at"=> "2022-10-23 13=>08=>52",
                "type"=> "delivery",
                "image"=> null,
                "shift_time"=> "evening",
                "days"=> [
                        "sunday",
                        "monday"
                ],
                "address"=> [
                        "jedha"=> "jedha",
                        "street"=> "street",
                        "building"=> "building"
                ],
                "variations"=> null,
                "user"=> null,      
                "trainer"=>null,
                "delivery"=>null,
                "meal"=>null,
                "meals"=>null,
                "user_subscription"=>null,
                "package_varient"=>null,
                ],
                "message"=> __("messages.success"),
                "status"=> true
            ], 'Success'); 
    }
}
