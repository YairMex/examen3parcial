<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fortniteController extends Controller
{
    public function datosApi(){


        //Skins
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://fortnite-api.com/v2/cosmetics/br');
        $data = json_decode($response->getBody()->getContents(), true);
        $items = [];
        foreach ($data['data'] as $value) {
            if($value['type']['value'] == 'outfit'){
                $items[] = [
                    'name' => $value['name'],
                    'image' => $value['images']['icon'],
                    'description' => $value['description'],
                    'type' => $value['type']['displayValue'],
                    'rarity' => $value['rarity']['displayValue'],
                    'id' => $value['id']
                ];
            }
            
        }

        //Banners
        $client1 = new \GuzzleHttp\Client();
        $response1 = $client1->request('GET', 'https://fortnite-api.com/v1/banners');
        $data1 = json_decode($response1->getBody()->getContents(), true);
        $itemsBanner = [];
        foreach ($data1['data'] as $value) {
            if($value['category'] == 'BattleRoyale'){
                $itemsBanner[] = [
                    'name' => $value['name'],
                    'image' => $value['images']['icon'],
                    'description' => $value['description'],
                    'category' => $value['category'],
                    'id' => $value['id']
                ];
            }
            
        }

        //Mapa
        $client2 = new \GuzzleHttp\Client();
        $response2 = $client2->request('GET', 'https://fortnite-api.com/v1/map');
        $data2 = json_decode($response2->getBody()->getContents(), true);

        //Skins nuevos 
        $client3 = new \GuzzleHttp\Client();
        $response3 = $client3->request('GET', 'https://fortnite-api.com/v2/cosmetics/br/new');
        $data3 = json_decode($response3->getBody()->getContents(), true);
        $itemsNuevos = [];
        foreach ($data3['data']['items'] as $value) {
            if($value['type']['value'] == 'outfit'){
                $itemsNuevos[] = [
                    'name' => $value['name'],
                    'image' => $value['images']['icon'],
                    'description' => $value['description'],
                    'type' => $value['type']['displayValue'],
                    'rarity' => $value['rarity']['displayValue'],
                    'id' => $value['id'],
                    //'set' => $value['set']['value'],
                    //'setText' => $value['set']['text'],
                    //'introduction' => $value['introduction']['text']
                ];
            }
            
        }

        return view('index', ['items' => $items, 'itemsBanner' => $itemsBanner, 'data2' => $data2, 'itemsNuevos' => $itemsNuevos]);
    }

    public function categorias(){
        return view('categories');
    }

    public function marvel(){

        // Consumir skins marvel
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://fortnite-api.com/v2/cosmetics/br');
        $data = json_decode($response->getBody()->getContents(), true);
        $items = [];
        foreach ($data['data'] as $value) {
            if($value['type']['value'] == 'outfit' && $value['rarity']['value'] == 'marvel'){
                $items[] = [
                    'name' => $value['name'],
                    'image' => $value['images']['icon'],
                    'description' => $value['description'],
                    'type' => $value['type']['displayValue'],
                    'rarity' => $value['rarity']['displayValue'],
                    'id' => $value['id']
                ];
            }
            
        }


        return view('marvel',['items'=>$items]);
    }

    public function dc(){

        // Consumir skins dc
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://fortnite-api.com/v2/cosmetics/br');
        $data = json_decode($response->getBody()->getContents(), true);
        $items = [];
        foreach ($data['data'] as $value) {
            if($value['type']['value'] == 'outfit' && $value['rarity']['value'] == 'dc'){
                $items[] = [
                    'name' => $value['name'],
                    'image' => $value['images']['icon'],
                    'description' => $value['description'],
                    'type' => $value['type']['displayValue'],
                    'rarity' => $value['rarity']['displayValue'],
                    'id' => $value['id']
                ];
            }
            
        }


        return view('dc',['items'=>$items]);
    }

    public function icon(){

        // Consumir skins icono
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://fortnite-api.com/v2/cosmetics/br');
        $data = json_decode($response->getBody()->getContents(), true);
        $items = [];
        foreach ($data['data'] as $value) {
            if($value['type']['value'] == 'outfit' && $value['rarity']['value'] == 'icon'){
                $items[] = [
                    'name' => $value['name'],
                    'image' => $value['images']['icon'],
                    'description' => $value['description'],
                    'type' => $value['type']['displayValue'],
                    'rarity' => $value['rarity']['displayValue'],
                    'id' => $value['id']
                ];
            }
            
        }


        return view('icon',['items'=>$items]);
    }

    public function legendary(){

        // Consumir skins legendarias
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://fortnite-api.com/v2/cosmetics/br');
        $data = json_decode($response->getBody()->getContents(), true);
        $items = [];
        foreach ($data['data'] as $value) {
            if($value['type']['value'] == 'outfit' && $value['rarity']['value'] == 'legendary'){
                $items[] = [
                    'name' => $value['name'],
                    'image' => $value['images']['icon'],
                    'description' => $value['description'],
                    'type' => $value['type']['displayValue'],
                    'rarity' => $value['rarity']['displayValue'],
                    'id' => $value['id']
                ];
            }
            
        }


        return view('legendary',['items'=>$items]);
    }

    public function epic(){

        // Consumir skins legendarias
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://fortnite-api.com/v2/cosmetics/br');
        $data = json_decode($response->getBody()->getContents(), true);
        $items = [];
        foreach ($data['data'] as $value) {
            if($value['type']['value'] == 'outfit' && $value['rarity']['value'] == 'epic'){
                $items[] = [
                    'name' => $value['name'],
                    'image' => $value['images']['icon'],
                    'description' => $value['description'],
                    'type' => $value['type']['displayValue'],
                    'rarity' => $value['rarity']['displayValue'],
                    'id' => $value['id']
                ];
            }
            
        }


        return view('epic',['items'=>$items]);
    }

    public function gaming(){

        // Consumir skins gaming
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://fortnite-api.com/v2/cosmetics/br');
        $data = json_decode($response->getBody()->getContents(), true);
        $items = [];
        foreach ($data['data'] as $value) {
            if($value['type']['value'] == 'outfit' && $value['rarity']['value'] == 'gaminglegends'){
                $items[] = [
                    'name' => $value['name'],
                    'image' => $value['images']['icon'],
                    'description' => $value['description'],
                    'type' => $value['type']['displayValue'],
                    'rarity' => $value['rarity']['displayValue'],
                    'id' => $value['id']
                ];
            }
            
        }


        return view('gaming',['items'=>$items]);
    }

    //Ver objeto
    public function verObjeto($id){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://fortnite-api.com/v2/cosmetics/br/'.$id);
        $data = json_decode($response->getBody()->getContents(), true);
        $items = [];
        foreach ($data['data'] as $value) {
                $items[] = [
                    'name' => $value['name'],
                    'image' => $value['images']['icon'],
                    'description' => $value['description'],
                    'type' => $value['type']['displayValue'],
                    'rarity' => $value['rarity']['displayValue'],
                    'id' => $value['id']
                ];
            
        }

        return view('product',['items'=>$items]);
    }
}
