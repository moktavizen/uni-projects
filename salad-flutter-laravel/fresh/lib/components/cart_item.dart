import 'package:flutter/material.dart';
import 'package:fresh/models/cart.dart';
import 'package:fresh/models/product.dart';
import 'package:provider/provider.dart';

class CartItem extends StatefulWidget {
  Product product;
  CartItem({
    super.key,
    required this.product,
  });

  @override
  State<CartItem> createState() => _CartItemState();
}

class _CartItemState extends State<CartItem> {
  void removeItemFromCart() {
    Provider.of<Cart>(context, listen: false)
        .removeItemFromCart(widget.product);
  }

  var products = <Product>[];
  var allproducts = <Product>[];
  late int i;

  @override
  Widget build(BuildContext context) {
    return Container(
      decoration: BoxDecoration(
          color: Colors.grey[100], borderRadius: BorderRadius.circular(8)),
      margin: const EdgeInsets.only(bottom: 10),
      child: ListTile(
        leading: ClipRRect(
          borderRadius: BorderRadius.circular(8),
          child: Image.network("http://10.0.2.2:8000/uploads/" +
              allproducts[i].image.toString()),
        ),
        title: Text(allproducts[i].title),
        subtitle: Text(allproducts[i].harga),
        trailing: IconButton(
          onPressed: removeItemFromCart,
          icon: const Icon(Icons.delete),
        ),
      ),
    );
  }
}
