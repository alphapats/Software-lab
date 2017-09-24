import htmlparser
link="http://cse.iitb.ac.in"
internal={'/page212', '/page185', '/wifi', '/webcal/view_entry.php?id=4415&date=20161006&user=_NUC_department', '/page139', '/', '/page222?batch=MTech3', '/page140', '/page202', '/page92', '/page137', '/room-scheduler/index.php', '/page33', '/page222?batch=MTech1', '/page37', '/page176', '/webcal/week.php?user=_NUC_department', '/page222?batch=BTech1', '/webcal/view_entry.php?id=4416&date=20161005&user=_NUC_department', '/page77', '/page222?batch=BTech4', '/page41', '/~csea/', '/page20', '/page222?batch=MTech2', '/page32', '/page208', '/page40', '/page199', '/deptwiki/doku.php', '/page142', '/~ttc', '/page132', '/page17', '/page78', '/page95', '/page222?batch=BTech2', '/page94', '/page36', '/page175', '/page222?batch=Phd', '/page222?batch=DD5', '/page222?batch=BTech3', '/page72', '/page117', '/infoczar/doku.php?do=login&id=start', '/~swlab/how_to_start_video_conf.html', '/page14', '/page15', '/page42', '/~ttc/', '/page206', '/page46?staffType=technical', '/deptwiki/doku.php?do=login&id=start', '/page130', '/page35', '/page46?staffType=administrative', '/page31', '/page161', '/page76', '/page30', '/page16'}
external= {'http://www.cse.iitb.ac.in/infoczar/doku.php?id=public:ttc:staff', 'http://www.iitb.ac.in/', 'http://www1.iitb.ac.in/academic/toacadcalender.jsp', 'http://www.iitb.ac.in/academic/toacadcalender.jsp', 'http://www.it.iitb.ac.in/resources/library/', 'http://systems.cse.iitb.ac.in/systems/contacts.html#main', 'http://www.it.iitb.ac.in', 'https://systems.cse.iitb.ac.in/systems', 'http://gpo.iitb.ac.in'}
inter,exter = htmlparser.links(link)
print(inter)
print(exter)
if inter==internal and exter==external:
	print("Testcase 1 passed")
else:
	print("Testcase 1 failed")
