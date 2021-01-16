String formatDate(String dbDate) {
  List<String> dateTimeList = dbDate.split(" ");
  List<String> dateList = dateTimeList.first.split("-");
  String dateTime = dateList[1] +
      "-" +
      dateList.last +
      "-" +
      dateList.first +
      " " +
      dateTimeList.last;
  return dateTime;
}
