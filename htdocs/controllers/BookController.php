<?php
  // file: controllers/BookController.php

  require_once('models/Publisher.php');
  require_once('models/Author.php');
  require_once('models/Book.php');

  class BookController extends Controller {

    public function index() {  
      return view('book/index',
       ['books'=>Book::all(),
        'title'=>'Books List']);
    }

    public function show($id) {
      $book = Book::find($id);
      $authors = Author::where('id', 'author_id');
      $publishers = Publisher::where('id', 'publisher_id');
      return view('book/show',
        ['book'=>$book,
         'title'=>'Book Detail', 'authors' => $authors, 'publishers' => $publishers]);
    }

    public function create() {
      return view('book/create',
        ['title'=>'Book Create']);
    }  

    public function store() {
      $title = Input::get('title');
      $edition = Input::get('edition');
      $copyright = Input::get('copyright');
      $language = Input::get('language');
      $pages = Input::get('pages');
      $author_id = Input::get('author_id');
      $publisher_id = Input::get('publisher_id');
      $item = ['title'=>$title,'edition'=>$edition,
               'copyright'=>$copyright,'pages'=>$pages,
                'author_id'=>$author_id,'publisher_id'=>$publisher_id];
      Book::create($item);
      return redirect('/book');
    }  

    public function edit($id) {
      $book = Book::find($id);
      return view('book/edit',
        ['book'=>$book,
         'title'=>'Book Edit']);
    }  

    public function update($_,$id) {
        $title = Input::get('title');
        $edition = Input::get('edition');
        $copyright = Input::get('copyright');
        $language = Input::get('language');
        $pages = Input::get('pages');
        $author_id = Input::get('author_id');
        $publisher_id = Input::get('publisher_id');
        $item = ['title'=>$title,'edition'=>$edition,
                'copyright'=>$copyright,'pages'=>$pages,
                    'author_id'=>$author_id,'publisher_id'=>$publisher_id];
        Book::update($id,$item);
        return redirect('/book');
    }  

    public function destroy($id) {  
      Book::destroy($id);
      return redirect('/book');
    } 
  }
?>