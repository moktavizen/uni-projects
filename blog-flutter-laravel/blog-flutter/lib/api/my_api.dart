import 'package:http/http.dart' as http;

class API {
  static final String _url =
      'http://myquran.ap-southeast-1.elasticbeanstalk.com/api/';
  static final String _imgUrl =
      'https://blogmgr-s3.s3.ap-southeast-1.amazonaws.com/public/posts/';

  static String getImage() {
    return _imgUrl;
  }

  static Future<http.Response> getPublicData(String apiUrl) async {
    http.Response response = await http.get(Uri.parse(_url + apiUrl));
    try {
      if (response.statusCode == 200) {
        return response;
      } else {
        print('API request failed with status code: ${response.statusCode}');
        print('Response body: ${response.body}');
        return Future.error('failed');
      }
    } catch (e) {
      print('Error occurred during API request: $e');
      return Future.error('failed');
    }
  }
}
