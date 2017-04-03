<?php

use App\Photo;
use App\Post;
use App\User;
use App\Role;
use App\Country;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//Route::get('example/{id}', function ($id) {
//
////    return view('welcome');
//    $url = $id + $id;
//    return "olá! ".$url;
//});
//
//Route::get('contacts', function () {
//
////    return view('welcome');
//    return "Contacts!";
//});
//
//Route::get('/', array('as'=>'admin.home', function () {
//
////    return view('welcome');
//    $url = route('admin.home');
//    return "olá! ".$url;
//}));
//
////Route::get('/post', 'PostsController@create');
//
//Route::get('/contact', 'PostsController@contact');
//
//Route::get('/post/{id}/{abc}', 'PostsController@show_post');
//
//Route::get('/specs/{altura}/{peso}/{idade}', 'PostsController@specsSheet');
//
//Route::get('/contactos', 'ContactosController@Contactos');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
//*/
//Route::get('/insert', function(){
//
//    DB::insert('insert into posts(title, content) values(?, ?)', ['Laravel is awesome', 'Laravel is the best thing that has happened to PHP']);
//});
//
////Route::get('/read', function(){
////
////    $results = DB::select('select * from posts where id=?', [1]);
////
////    //return $results;
////    return var_dump($results);
//////    if(count($results)) {
//////        foreach ($results as $result) {
//////            return $result->title. $result->content;
//////        }
//////    }
////});
////
////Route::get('update', function(){
////
////    $updated = DB::update('update posts set title = "Updated title" where id=?', [1]);
////
////    return $updated;
////});
//
////Route::get('/delete', function(){
////
////    $deleted = DB::delete('delete from posts where id=?', [1]);
////
////    return $deleted;
////});
//
///*
//|--------------------------------------------------------------------------
//| Object Relational Model - ORM - Model
//| ELOQUENT
//|--------------------------------------------------------------------------
//*/
//
//Route::get('/read', function(){
//
//    $posts = Post::all();
//
//    foreach($posts as $post){
//
//        return $post->title;
//    }
//
//
//});
//
//Route::get('/find', function(){
//
//   $posts = Post::find(2);
//
//   return $posts->title;
//});
//
//Route::get('/findwhere', function(){
//
//   $posts = Post::where('id', 2)->orderBy('id','desc')->take(1)->get();
//
//   return $posts;
//});
//
//Route::get('findMore', function(){
//
//   //$posts = Post::findOrFail(1);
//
//   $post = Post::where('users_count', '<', 50)->firstOrFail();
//
//   return $post;
//});
////nova forma de fazer insert na bd ou update
//
//Route::get('basicinsert', function(){
//
//   $post = new Post;
////   $post = Post::find(5);
//
//   $post->title = 'abcde';
//   $post->content = 'Wow eloquent is really cool, look at this content';
//
//   $post->save();
//});
//
////create data com o eloquent
//Route::get('createX', function(){
//
//    Post::create(['title'=>'the create method', 'content'=>'mas que raio é esta cena?']);
//});
//
////update data com eloquent
//Route::get('updateX', function(){
//
//    Post::where('id', 2)->where('is_admin', 0)->update(['title'=>'new php title', 'content'=>'novo content coise']);
//});
//
////delete data com eloquent
//Route::get('deleteX', function(){
//
//    $post = Post::find(2);
//
//    $post->delete();
//
//});
//
//Route::get('/delete2', function(){
//
//    Post::destroy(2);
//
//    Post::destroy([2, 4]);
//
//    Post::where('is_admin', 0)->delete();
//});
//
////Soft Delete -> passa par aum trash, e só depois faz o permanente delete
////Basicamente adiciona uma coluna no final da tabela da BD; essa coluna toma a data de delete
////quando o comando de delete é feito.
////adicionar no Post php a parte do softdelete
//Route::get('softdelete', function(){
//
//    Post::find(1)->delete();
//
//});
//
//Route::get('readsoftdelete', function(){
//
////    $post = Post::find(1);
////
////    return $post;
//
////mostrar 1 dos deletes
////    $post = Post::withTrashed()->where('id', 1)->get();
////
////    return $post;
////mostrar todos quer tenha ou nao o deleted com timestamp
////    $post = Post::withTrashed()->where('is_admin', 0)->get();
////
////    return $post;
//
////mostrar apenas os deleted com timestamp
//    $post = Post::onlyTrashed()->where('is_admin', 0)->get();
//
//    return $post;
//});
//
////restaurar os trashed items
//Route::get('/restore', function(){
//
//   Post::withTrashed()->where('is_admin', 0)->restore();
//});
//
////delete permanente
//Route::get('forcedelete', function(){
//
//   Post::onlyTrashed()->where('is_admin', 0)->forceDelete();
//});
//
//
///*
//|--------------------------------------------------------------------------
//| Object Relational Model - ORM - Model
//| ELOQUENT RELATIONSHIPS
//|--------------------------------------------------------------------------
//*/
//
////One to One relationship
//Route::get('/user/{id}/post', function($id){
//
//    return User::find($id)->post->content;
//});
//
////Inverse Relation
//Route::get('/post/{id}/user', function($id){
//
//    return Post::find($id)->user->name;
//});
//
////One to Many relationship
//Route::get('/poststomany', function(){
//
//    $user = User::find(1);
//
//    foreach ($user->posts as $post){
//
//       echo  $post->title. "<br>";
//    }
//});
//
////Many to Many relationship
//Route::get('/manytomany/{id}/role', function($id){
//
//    $user = User::find($id)->roles()->orderBy('id','desc')->get();
//
//    return $user;
//
////    foreach ($user->roles as $role){
////
////        return $role->name;
////    }
//
//});
//
//
////Acces to lookup table/pivot table/intermediate table
//Route::get('/user/pivot', function(){
//
//    $user = User::find(1);
//
//    foreach($user->roles as $role){
//
//        echo $role->pivot->created_at;
//    }
//})  ;
//
////obter o titulo do post, a partir do country, passando pela tabela de post
////que vai buscar info a tabela users como definido no Model Country
//Route::get('/user/country', function(){
//
//    $country = Country::find(2);
//
//    foreach($country->posts as $post){
//
//        return $post->title;
//    }
//});
//
////Polymorphic Relations
////a tabela photos tem colunas de relação para cada uma das outras tabelas
////são relacionadas através dos models
////pega imagem do user
//Route::get('poly', function(){
//
//   $user = User::find(1);
//
//   foreach($user->photos as $photo){
//
//       return $photo->path;
//   }
//});
//
////pega imagem da tabela post (a relacao é feita na tabela photos, coluna imageable_type
//Route::get('poly/post/photo', function(){
//
//    $post = Post::find(1);
//
//    foreach($post->photos as $photo){
//
//        echo $photo->path.'<br>';
//    }
//});
//
////processo inverso - obter user atraves da imagem
//Route::get('get/{id}/users', function($id){
//
//   $photo = Photo::findOrFail($id);
//
//   return $photo->imageable;
//});

//-----------------------------------------------//
//              Forms part
//-----------------------------------------------//
Route::resource('/posts', 'PostsController');