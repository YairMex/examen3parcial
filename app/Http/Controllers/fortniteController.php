<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ubicacion;
use App\Models\Fortnite;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

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

        //$hola = DB::table('items')->groupBy('texto')->get();

        /* $valores = Fortnite::where('id',1)->get();
        $texto=[];
        /* foreach ($valores as $value) {
            $texto[]=[
                'id' => $value['id'],
                'texto' => $value['texto'],
                'slug' => $value['slug'],
                'imagen' => $value['imagen']
            ];
            

        }  */

        //echo json_encode($hola['texto']);
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
    
        /* echo json_encode($data['data']['name']); */
        return view('product',['data'=>$data['data']]);
    }

    //Mapa
    public function mapa(){
        $client2 = new \GuzzleHttp\Client();
        $response2 = $client2->request('GET', 'https://fortnite-api.com/v1/map');
        $data2 = json_decode($response2->getBody()->getContents(), true);

        $ubicaciones = Ubicacion::all();
        $items = [];
        foreach ($ubicaciones as $value) {
            $items[] = [
                'nombre' => $value['nombre'],
                'coordenadasX' => $value['coordenadasX'],
                'coordenadasY' => $value['coordenadasY'],
                'coordenadasZ' => $value['coordenadasZ'],
                'slug' => $value['slug'],
                'id' => $value['id']
            ];
        }

        return view('mapa', ['data2'=>$data2, 'items'=>$items]);
    }

    //Contacto
    public function contacto(){
        return view('contact');
    }

    //Mochilas
    public function mochilas(){

        
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://fortnite-api.com/v2/cosmetics/br');
        $data = json_decode($response->getBody()->getContents(), true);
        $items = [];
        foreach ($data['data'] as $value) {
            if($value['type']['value'] == 'backpack' ){
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


        return view('mochilas',['items'=>$items]);
    }

    //Picos
    public function picos(){

        
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://fortnite-api.com/v2/cosmetics/br');
        $data = json_decode($response->getBody()->getContents(), true);
        $items = [];
        foreach ($data['data'] as $value) {
            if($value['type']['value'] == 'pickaxe' ){
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


        return view('picos',['items'=>$items]);
    }

    //Emotes
    public function emotes(){

        
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://fortnite-api.com/v2/cosmetics/br');
        $data = json_decode($response->getBody()->getContents(), true);
        $items = [];
        foreach ($data['data'] as $value) {
            if($value['type']['value'] == 'emote' ){
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


        return view('emotes',['items'=>$items]);
    }

    // Ala delta
    public function aladelta(){

        
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://fortnite-api.com/v2/cosmetics/br');
        $data = json_decode($response->getBody()->getContents(), true);
        $items = [];
        foreach ($data['data'] as $value) {
            if($value['type']['value'] == 'glider' ){
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


        return view('aladelta',['items'=>$items]);
    }

    //Banners
    public function banners(){
        $client1 = new \GuzzleHttp\Client();
        $response1 = $client1->request('GET', 'https://fortnite-api.com/v1/banners');
        $data1 = json_decode($response1->getBody()->getContents(), true);
        $items = [];
        foreach ($data1['data'] as $value) {
            if($value['category'] == 'BattleRoyale'){
                $items[] = [
                    'name' => $value['name'],
                    'image' => $value['images']['icon'],
                    'description' => $value['description'],
                    'category' => $value['category'],
                    'id' => $value['id']
                ];
            }
            
        }
        
        return view('banners', ['items'=>$items]);
    }


}
