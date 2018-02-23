SELECT COUNT(VideoTitre) FROM video 59


SELECTVideoTitre,GROUP_CONCAT(DISTINCTThemeLib,' ')FROM video JOIN thematic ON VideoNum = ThematicVideoNum JOIN theme ON ThematicthemeNum = ThemeNum WHERE (VideoNum)=3
VideoTitre GROUP_CONCAT(DISTINCTThemeLib,' ') Aux Yeux De Tous Thriller
