import 'package:flutter/material.dart';
import 'package:fresh/models/product.dart';

class Cart extends ChangeNotifier {
  // daftar produk yang dijual
  List<Product> productShop = [];
  // daftar produk pada yang akan dibeli
  List<Product> userCart = [];
  // ambil produk untuk dibeli
  List<Product> getProductList() {
    return productShop;
  }

  // ambil yang akan dibeli
  List<Product> getUserCart() {
    return userCart;
  }

  // menambahkan produk yang akan dibeli
  void addItemToCart(Product product) {
    userCart.add(product);
    notifyListeners();
  }

  // menghapus produk
  void removeItemFromCart(Product product) {
    userCart.remove(product);
    notifyListeners();
  }
}
