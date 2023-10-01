import 'package:flutter/material.dart';
import 'dart:convert';
import '../api/my_api.dart';
import '../models/item.dart';

class HomePage extends StatefulWidget {
  const HomePage({Key? key}) : super(key: key);

  @override
  _HomePageState createState() => _HomePageState();
}

class _HomePageState extends State<HomePage> {
  var allItems = <BlogItem>[];

  @override
  void initState() {
    _getItems();
    super.initState();
  }

  Future<void> _getItems() async {
    await _initData();
  }

  Future<void> _initData() async {
    try {
      var response = await API.getPublicData("allitems");
      if (response.statusCode == 200) {
        Iterable list = json.decode(response.body);
        setState(() {
          allItems = list.map((model) => BlogItem.fromJson(model)).toList();
        });
      } else {
        print('API request failed with status code: ${response.statusCode}');
      }
    } catch (e) {
      print('Error occurred during API request: $e');
    }
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Center(
          child: Text('Islamic Blog', style: TextStyle(color: Colors.black)),
        ),
        backgroundColor: Colors.white,
      ),
      body: ListView.builder(
        itemCount: allItems.length,
        itemBuilder: (context, index) {
          return ListTile(
            leading: ClipRRect(
              borderRadius: BorderRadius.circular(8.0),
              child: Container(
                color: Colors.grey[200],
                height: 100,
                width: 100,
                child: Image.network(
                  API.getImage() + allItems[index].image.toString(),
                  fit: BoxFit.cover,
                ),
              ),
            ),
            title: Text(
              allItems[index].title,
              maxLines: 2,
              overflow: TextOverflow.ellipsis,
            ),
            subtitle: Text(
              allItems[index].content,
              maxLines: 2,
              overflow: TextOverflow.ellipsis,
            ),
          );
        },
      ),
    );
  }
}
