<?php
//stock control
            // Fetch the product from the database based on the provided product ID.
            // If the product does not exist, throw an exception.
            $product = Product::findOrFail($request->id);

            // Retrieve the stock balance associated with the product.
            $stockBalance = $product->stockBalance;

            // Update the buying quantity of the product in the stock balance table
            // by adding the quantity of products being purchased.
            $stockBalance->buying_qty += $request->buying_qty;

            // Update the current quantity of the product in the stock balance table
            // by adding the quantity of products being purchased.
            $stockBalance->current_quantity += $request->buying_qty;

            // Save the updated stock balance information to the database.
            $stockBalance->save();

            // Update the quantity of the product in the product table by adding the
            // quantity of products being purchased.
            $product->quantity += $request->buying_qty;

            // Save the updated product information to the database.
            $product->save();

            // Return a JSON response with the purchase details and a 201 status code
            // indicating that the resource was created.
            //return response()->json($purchase_details, 201);

            //stock control ends

?>
