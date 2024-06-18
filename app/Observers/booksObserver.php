<?php

namespace App\Observers;

use App\Models\books;

class booksObserver
{
    /**
     * Handle the books "created" event.
     */
    public function created(books $books): void
    {
        // $i = $books->book_id;
        // $books->index = $i%12;
        // $books->save();
            $books->value = $books->Price * 80;
            $books->save();
    }

    /**
     * Handle the books "updated" event.
     */
    public function updated(books $books): void
    {
        $books->value = $books->Price * 80;
        $books->saveQuietly();
    }

    /**
     * Handle the books "deleted" event.
     */
    public function deleted(books $books): void
    {
        //
    }

    /**
     * Handle the books "restored" event.
     */
    public function restored(books $books): void
    {
        //
    }

    /**
     * Handle the books "force deleted" event.
     */
    public function forceDeleted(books $books): void
    {
        //
    }
}
