<p>
HTTP headers:</br>
FORWARDED_PROTO: <?php echo $_SERVER[ 'HTTP_X_FORWARDED_PROTO']; ?><br/>
PERMISSIONS: <?php echo $_SERVER[ 'HTTP_X_SANDSTORM_PERMISSIONS']; ?><br/>
<br/>
Amount of users: <?php echo User::all()->count()?><br/>
Amount of notebooks: <?php echo Notebook::all()->count()?><br/>
Amount of tags: <?php echo Tag::all()->count()?><br/>
Amount of notes: <?php echo Note::all()->count()?><br/>
<br/>
Amount of Init Steps: <?php echo DB::table('migrations')->where('batch', '=', 1)->count();?><br/>
</p>
