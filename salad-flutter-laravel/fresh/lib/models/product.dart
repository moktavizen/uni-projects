class Product {
  int id;
  String image;
  String title;
  String content;
  String harga;
  String created_at;
  String updated_at;

  Product(
      {required this.id,
      required this.image,
      required this.title,
      required this.content,
      required this.harga,
      required this.created_at,
      required this.updated_at});

  Product.fromJson(Map json)
      : id = json['id'],
        image = json['image'],
        title = json['title'],
        content = json['content'],
        harga = json['harga'],
        created_at = json['created_at'],
        updated_at = json['updated_at'];
  Map toJson() {
    return {
      'id': id,
      'image': image,
      'title': title,
      'content': content,
      'harga': harga,
      'created_at': created_at,
      'updated_at': updated_at,
    };
  }
}
