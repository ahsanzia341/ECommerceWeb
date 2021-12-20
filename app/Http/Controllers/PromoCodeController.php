<?php

namespace App\Http\Controllers;

use App\Models\PromoCode;
use Illuminate\Http\Request;

/**
 * Class PromoCodeController
 * @package App\Http\Controllers
 */
class PromoCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promoCodes = PromoCode::paginate();

        return view('promo-code.index', compact('promoCodes'))
            ->with('i', (request()->input('page', 1) - 1) * $promoCodes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $promoCode = new PromoCode();
        return view('promo-code.create', compact('promoCode'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PromoCode::$rules);

        $promoCode = PromoCode::create($request->all());

        return redirect()->route('promo-codes.index')
            ->with('success', 'PromoCode created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $promoCode = PromoCode::find($id);

        return view('promo-code.show', compact('promoCode'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $promoCode = PromoCode::find($id);

        return view('promo-code.edit', compact('promoCode'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PromoCode $promoCode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PromoCode $promoCode)
    {
        request()->validate(PromoCode::$rules);

        $promoCode->update($request->all());

        return redirect()->route('promo-codes.index')
            ->with('success', 'PromoCode updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $promoCode = PromoCode::find($id)->delete();

        return redirect()->route('promo-codes.index')
            ->with('success', 'PromoCode deleted successfully');
    }
}
