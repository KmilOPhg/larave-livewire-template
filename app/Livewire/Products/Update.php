<?php

namespace App\Livewire\Products;

use AllowDynamicProperties;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Livewire\Component;

class Update extends Component
{
    public Product $product;
    public string $name;
    public ?string $description = null;
    public int $price;
    public int $stock;

    /**
     * @param Product $product
     * @return void
     *
     * Cargamos los datos al iniciar el componente
     */
    public function mount(Product $product)
    {
        $this->product = $product;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->price = $product->price;
        $this->stock = $product->stock;
    }

    /**
     * @return RedirectResponse|null
     *
     * Actualizar un producto en la base de datos
     */
    public function actualizarProducto(): ?RedirectResponse {
        try {
            //Usamos el FormRequest manualmente para validar los datos
            $request = new ProductRequest();

            $validatedData = $this->validate(
                $request->rules(),
                $request->messages()
            );

            // Actualizamos el producto con los datos validados
            $this->product->update($validatedData);

            session()->flash('success', 'Producto actualizado correctamente');

            return $this->redirectRoute('products.index', navigate: true);
        } catch (\Exception $e) {
            session()->flash('error', 'Error al actualizar producto: ' . $e->getMessage());
            return null;
        }
    }

    public function render()
    {
        return view('livewire.products.create');
    }
}
