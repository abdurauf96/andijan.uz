<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Http\Resources\ContactResource;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * @OA\Get(
     *      path="/contact",
     *      operationId="getContact",
     *      tags={"Contacts"},
     *      summary="Get contacts",
     *      description="Returns contact information",
     *
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       )
     *     )
     */
    public function getOne()
    {
        $contact=Contact::first();
        return new ContactResource($contact);
    }
}
