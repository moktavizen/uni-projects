class BlogItem {
  late int id;
  late String image;
  late String title;
  late String content;
  late String created_at;
  late String updated_at;

  BlogItem({
    required this.id,
    required this.image,
    required this.title,
    required this.content,
    required this.created_at,
    required this.updated_at,
  });

  BlogItem.fromJson(Map<String, dynamic> json)
      : id = json['id'],
        image = json['image'],
        title = json['title'],
        content = json['content'],
        created_at = json['created_at'],
        updated_at = json['updated_at'];

  Map<String, dynamic> toJson() {
    return {
      'id': id,
      'image': image,
      'title': title,
      'content': content,
      'created_at': created_at,
      'updated_at': updated_at,
    };
  }
}
