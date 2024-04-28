<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;

class StockController extends Controller
{
    protected $redirectTo = 'admintools.stock';

    public function showStockForm()
    {
        return view('admintools.stock');
    }

    public function store(Request $request)
    {
        $inputData = $request->all();

        if (is_array($inputData['name'])) {
            $validatedData = [];

            foreach ($inputData['name'] as $key => $value) {
                $validatedData[] = [
                    'name' => $inputData['name'][$key],
                    'manufacturer' => $inputData['manufacturer'][$key],
                    'year' => $inputData['year'][$key],
                    'price' => $inputData['price'][$key],
                ];
            }

            Stock::insert($validatedData);
        } else {
            $validatedData = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'manufacturer' => ['nullable', 'string', 'max:255'],
                'year' => ['nullable', 'integer', 'digits:4'],
                'price' => ['nullable', 'numeric'],
            ]);

            Stock::create($validatedData);
        }

        return redirect()->route('stock')->with('success', 'Stock data successfully submitted!');
    }

    protected function redirectPath()
    {
        return $this->redirectTo;
    }
}
