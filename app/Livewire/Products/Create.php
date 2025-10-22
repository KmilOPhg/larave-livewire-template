<?php

namespace App\Livewire\Products;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $description;
    public $price;
    public $stock = 0;

    /**
     * @return null|RedirectResponse
     * @throws ValidationException
     *
     * Crear un nuevo producto en la base de datos
     */
    public function crearProducto(): ?RedirectResponse
    {
        try {
            //Usamos el FormRequest manualmente para validar los datos
            $request = new ProductRequest();

            $validatedData = $this->validate(
                $request->rules(),
                $request->messages()
            );

            Product::create($validatedData);

            $this->reset(['name', 'description', 'price', 'stock']);

            session()->flash('success', 'Producto creado correctamente');

            return $this->redirectRoute('products.index', navigate: true);

        } catch (\Exception $e) {
            session()->flash('error', 'Error al crear producto: ' . $e->getMessage());
            return null;
        }
    }

    public function render()
    {
        return view('livewire.products.create');
    }
}
