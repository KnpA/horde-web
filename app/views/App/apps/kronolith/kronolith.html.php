<p>Kronolith is the Horde calendar application. It provides a stable and
featureful individual calendar system for every Horde user, with integrated
collaboration/scheduling features.  It makes extensive use of the <?php echo
$this->linkTo('Horde Framework', array('controller' => 'app', 'action' =>
'app', 'app' => 'horde')) ?> to provide integration with other
applications.</p>

<p>Right now, Kronolith implements a solid, stand-alone calendar system,
allowing repeating events, all-day events, tags, shared calendars, remote
calendars, CalDAV support, iTip/iCalendar support, generation of free/busy
information, and managing multiple users through Horde Authentication. The
calendar API that Kronolith uses is abstracted such that it could work with any
backend, but right now we provide SQL (abstracted to support several databases,
including MySQL, PostgreSQL, and SQLite),
and <a href="http://www.kolab.org/">Kolab</a> backend libraries.</p>

<p>If you are interested in helping develop Kronolith, or just want to ask
questions and keep an eye on its progress, be sure to join our <?php echo
$this->linkTo('mailing list', array('controller' => 'community', 'action' =>
'mail')) ?>!</p>
