var path = "user input";
child_process.exec('ls -l ' + path, function (err, data) {
  console.log(data);
});