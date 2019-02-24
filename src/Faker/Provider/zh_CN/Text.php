<?php

namespace Faker\Provider\zh_CN;

class Text extends \Faker\Provider\Text
{
    protected static $separator = '';
    protected static $separatorLen = 0;

    /**
     * All punctuation in $baseText: 、 。 「 」 『 』 ！ ？ ー ， ： ；
     */
    protected static $notEndPunct = array('、', '「', '『', 'ー', '，', '：', '；');
    protected static $endPunct = array('。', '」', '』', '！', '？');
    protected static $notBeginPunct = array('、', '。', '」', '』', '！', '？', 'ー', '，', '：', '；');

    /**
     * Title: 吶喊 Call to Arms (1922)
     * Author: 魯迅 Lu Xun
     * Language: Simplified Chinese
     * @see https://zh.wikisource.org/zh-hans/%E5%90%B6%E5%96%8A
     * @var string
     */
    protected static $baseText = <<<'EOT'
我在年青时候也曾经做过许多梦，后来大半忘却了，但自己也并不以为可惜。所谓回忆者，虽说可以使人欢欣，有时也不免使人寂寞，使精神的丝缕还牵着已逝的寂寞的时光，又有什么意味呢，而我偏苦于不能全忘却，这不能全忘的一部分，到现在便成了《呐喊》的来由。
我有四年多，曾经常常，——几乎是每天，出入于质铺和药店里，年纪可是忘却了，总之是药店的柜台正和我一样高，质铺的是比我高一倍，我从一倍高的柜台外送上衣服或首饰去，在侮蔑里接了钱，再到一样高的柜台上给我久病的父亲去买药。回家之后，又须忙别的事了，因为开方的医生是最有名的，以此所用的药引也奇特：冬天的芦根，经霜三年的甘蔗，蟋蟀要原对的，结子的平地木，……多不是容易办到的东西。然而我的父亲终于日重一日的亡故了。
有谁从小康人家而坠入困顿的么，我以为在这途路中，大概可以看见世人的真面目；我要到N进K学堂去了，仿佛是想走异路，逃异地，去寻求别样的人们。我的母亲没有法，办了八元的川资，说是由我的自便；然而伊哭了，这正是情理中的事，因为那时读书应试是正路，所谓学洋务，社会上便以为是一种走投无路的人，只得将灵魂卖给鬼子，要加倍的奚落而且排斥的，而况伊又看不见自己的儿子了。然而我也顾不得这些事，终于到N去进了K学堂了，在这学堂里，我才知道世上还有所谓格致，算学，地理，历史，绘图和体操。生理学并不教，但我们却看到些木版的《全体新论》和《化学卫生论》之类了。我还记得先前的医生的议论和方药，和现在所知道的比较起来，便渐渐的悟得中医不过是一种有意的或无意的骗子，同时又很起了对于被骗的病人和他的家族的同情；而且从译出的历史上，又知道了日本维新是大半发端于西方医学的事实。
因为这些幼稚的知识，后来便使我的学籍列在日本一个乡间的医学专门学校里了。我的梦很美满，预备卒业回来，救治像我父亲似的被误的病人的疾苦，战争时候便去当军医，一面又促进了国人对于维新的信仰。我已不知道教授微生物学的方法，现在又有了怎样的进步了，总之那时是用了电影，来显示微生物的形状的，因此有时讲义的一段落已完，而时间还没有到，教师便映些风景或时事的画片给学生看，以用去这多馀的光阴。其时正当日俄战争的时候，关于战事的画片自然也就比较的多了，我在这一个讲堂中，便须常常随喜我那同学们的拍手和喝采。有一回，我竟在画片上忽然会见我久违的许多中国人了，一个绑在中间，许多站在左右，一样是强壮的体格，而显出麻木的神情。据解说，则绑着的是替俄国做了军事上的侦探，正要被日军砍下头颅来示众，而围着的便是来赏鉴这示众的盛举的人们。
这一学年没有完毕，我已经到了东京了，因为从那一回以后，我便觉得医学并非一件紧要事，凡是愚弱的国民，即使体格如何健全，如何茁壮，也只能做毫无意义的示众的材料和看客，病死多少是不必以为不幸的。所以我们的第一要著，是在改变他们的精神，而善于改变精神的是，我那时以为当然要推文艺，于是想提倡文艺运动了。在东京的留学生很有学法政理化以至警察工业的，但没有人治文学和美术；可是在冷淡的空气中，也幸而寻到几个同志了，此外又邀集了必须的几个人，商量之后，第一步当然是出杂志，名目是取“新的生命”的意思，因为我们那时大抵带些复古的倾向，所以只谓之《新生》。
《新生》的出版之期接近了，但最先就隐去了若干担当文字的人，接着又逃走了资本，结果只剩下不名一钱的三个人。创始时候既已背时，失败时候当然无可告语，而其后却连这三个人也都为各自的运命所驱策，不能在一处纵谈将来的好梦了，这就是我们的并未产生的《新生》的结局。
我感到未尝经验的无聊，是自此以后的事。我当初是不知其所以然的；后来想，凡有一人的主张，得了赞和，是促其前进的，得了反对，是促其奋斗的，独有叫喊于生人中，而生人并无反应，既非赞同，也无反对，如置身毫无边际的荒原，无可措手的了，这是怎样的悲哀呵，我于是以我所感到者为寂寞。
这寂寞又一天一天的长大起来，如大毒蛇，缠住了我的灵魂了。
然而我虽然自有无端的悲哀，却也并不愤懑，因为这经验使我反省，看见自己了：就是我决不是一个振臂一呼应者云集的英雄。
只是我自己的寂寞是不可不驱除的，因为这于我太痛苦。我于是用了种种法，来麻醉自己的灵魂，使我沈入于国民中，使我回到古代去，后来也亲历或旁观过几样更寂寞更悲哀的事，都为我所不愿追怀，甘心使他们和我的脑一同消灭在泥土里的，但我的麻醉法却也似乎已经奏了功，再没有青年时候的慷慨激昂的意思了。
S会馆里有三间屋，相传是往昔曾在院子里的槐树上缢死过一个女人的，现在槐树已经高不可攀了，而这屋还没有人住；许多年，我便寓在这屋里钞古碑。客中少有人来，古碑中也遇不到什么问题和主义，而我的生命却居然暗暗的消去了，这也就是我惟一的愿望。夏夜，蚊子多了，便摇著蒲扇坐在槐树下，从密叶缝里看那一点一点的青天，晚出的槐蚕又每每冰冷的落在头颈上。
那时偶或来谈的是一个老朋友金心异，将手提的大皮夹放在破桌上，脱下长衫，对面坐下了，因为怕狗，似乎心房还在怦怦的跳动。
“你钞了这些有什么用？”有一夜，他翻着我那古碑的钞本，发了研究的质问了。
“没有什么用。”
“那么，你钞他是什么意思呢？”
“没有什么意思。”
“我想，你可以做点文章……”
我懂得他的意思了，他们正办《新青年》，然而那时仿佛不特没有人来赞同，并且也还没有人来反对，我想，他们许是感到寂寞了，但是说：
“假如一间铁屋子，是绝无窗户而万难破毁的，里面有许多熟睡的人们，不久都要闷死了，然而是从昏睡入死灭，并不感到就死的悲哀。现在你大嚷起来，惊起了较为清醒的几个人，使这不幸的少数者来受无可挽救的临终的苦楚，你倒以为对得起他们么？”
“然而几个人既然起来，你不能说决没有毁坏这铁屋的希望。”
是的，我虽然自有我的确信，然而说到希望，却是不能抹杀的，因为希望是在于将来，决不能以我之必无的证明，来折服了他之所谓可有，于是我终于答应他也做文章了，这便是最初的一篇《狂人日记》。从此以后，便一发而不可收，每写些小说模样的文章，以敷衍朋友们的嘱托，积久就有了十馀篇。
在我自己，本以为现在是已经并非一个切迫而不能已于言的人了，但或者也还未能忘怀于当日自己的寂寞的悲哀罢，所以有时候仍不免呐喊几声，聊以慰藉那在寂寞里奔驰的猛士，使他不惮于前驱。至于我的喊声是勇猛或是悲哀，是可憎或是可笑，那倒是不暇顾及的；但既然是呐喊，则当然须听将令的了，所以我往往不恤用了曲笔，在《药》的瑜儿的坟上平空添上一个花环，在《明天》里也不叙单四嫂子竟没有做到看见儿子的梦，因为那时的主将是不主张消极的。至于自己，却也并不愿将自以为苦的寂寞，再来传染给也如我那年青时候似的正做着好梦的青年。
这样说来，我的小说和艺术的距离之远，也就可想而知了，然而到今日还能蒙着小说的名，甚而至于且有成集的机会，无论如何总不能不说是一件徼幸的事，但徼幸虽使我不安于心，而悬揣人间暂时还有读者，则究竟也仍然是高兴的。
所以我竟将我的短篇小说结集起来，而且付印了，又因为上面所说的缘由，便称之为《呐喊》。
鲁镇的酒店的格局，是和别处不同的：都是当街一个曲尺形的大柜台，柜里面豫备着热水，可以随时温酒。做工的人，傍午傍晚散了工，每每花四文铜钱，买一碗酒，——这是二十多年前的事，现在每碗要涨到十文，——靠柜外站着，热热的喝了休息；倘肯多花一文，便可以买一碟盐煮笋，或者茴香豆，做下酒物了，如果出到十几文，那就能买一样荤菜，但这些顾客，多是短衣帮，大抵没有这样阔绰。只有穿长衫的，才踱进店面隔壁的房子里，要酒要菜，慢慢地坐喝。
我从十二岁起，便在镇口的咸亨酒店里当伙计，掌柜说，样子太傻，怕侍候不了长衫主顾，就在外面做点事罢。外面的短衣主顾，虽然容易说话，但唠唠叨叨缠夹不清的也很不少。他们往往要亲眼看着黄酒从坛子里舀出，看过壶子底里有水没有，又亲看将壶子放在热水里，然后放心：在这严重监督下，羼水也很为难。所以过了几天，掌柜又说我干不了这事。幸亏荐头的情面大，辞退不得，便改为专管温酒的一种无聊职务了。
我从此便整天的站在柜台里，专管我的职务。虽然没有什么失职，但总觉得有些单调，有些无聊。掌柜是一副凶脸孔，主顾也没有好声气，教人活泼不得；只有孔乙己到店，才可以笑几声，所以至今还记得。
孔乙己是站着喝酒而穿长衫的唯一的人。他身材很高大；青白脸色，皱纹间时常夹些伤痕；一部乱蓬蓬的花白的胡子。穿的虽然是长衫，可是又脏又破，似乎十多年没有补，也没有洗。他对人说话，总是满口之乎者也，教人半懂不懂的。因为他姓孔，别人便从描红纸上的“上大人孔乙己”这半懂不懂的话里，替他取下一个绰号，叫作孔乙己。孔乙己一到店，所有喝酒的人便都看着他笑，有的叫道，“孔乙己，你脸上又添上新伤疤了！”他不回答，对柜里说，“温两碗酒，要一碟茴香豆。”便排出九文大钱。他们又故意的高声嚷道，“你一定又偷了人家的东西了！”孔乙己睁大眼睛说，“你怎么这样凭空污人清白……”“什么清白？我前天亲眼见你偷了何家的书，吊着打。”孔乙己便涨红了脸，额上的青筋条条绽出，争辩道，“窃书不能算偷……窃书！……读书人的事，能算偷么？”接连便是难懂的话，什么“君子固穷”，什么“者乎”之类，引得众人都哄笑起来：店内外充满了快活的空气。
听人家背地里谈论，孔乙己原来也读过书，但终于没有进学，又不会营生；于是愈过愈穷，弄到将要讨饭了。幸而写得一笔好字，便替人家钞钞书，换一碗饭吃。可惜他又有一样坏脾气，便是好喝懒做。坐不到几天，便连人和书籍纸张笔砚，一齐失踪。如是几次，叫他钞书的人也没有了。孔乙己没有法，便免不了偶然做些偷窃的事。但他在我们店里，品行却比别人都好，就是从不拖欠；虽然间或没有现钱，暂时记在粉板上，但不出一月，定然还清，从粉板上拭去了孔乙己的名字。
孔乙己喝过半碗酒，涨红的脸色渐渐复了原，旁人便又问道，“孔乙己，你当真认识字么？”孔乙己看着问他的人，显出不屑置辩的神气。他们便接着说道，“你怎的连半个秀才也捞不到呢？”孔乙己立刻显出颓唐不安模样，脸上笼上了一层灰色，嘴里说些话；这回可是全是之乎者也之类，一些不懂了。在这时候，众人也都哄笑起来：店内外充满了快活的空气。
在这些时候，我可以附和着笑，掌柜是决不责备的。而且掌柜见了孔乙己，也每每这样问他，引人发笑。孔乙己自己知道不能和他们谈天，便只好向孩子说话。有一回对我说道，“你读过书么？”我略略点一点头。他说，“读过书，……我便考你一考。茴香豆的茴字，怎样写的？”我想，讨饭一样的人，也配考我么？便回过脸去，不再理会。孔乙己等了许久，很恳切的说道，“不能写罢？……我教给你，记着！这些字应该记着。将来做掌柜的时候，写账要用。”我暗想我和掌柜的等级还很远呢，而且我们掌柜也从不将茴香豆上账；又好笑，又不耐烦，懒懒的答他道，“谁要你教，不是草头底下一个来回的回字么？”孔乙己显出极高兴的样子，将两个指头的长指甲敲着柜台，点头说，“对呀对呀！……回字有四样写法，你知道么？”我愈不耐烦了，努着嘴走远。孔乙己刚用指甲蘸了酒，想在柜上写字，见我毫不热心，便又叹一口气，显出极惋惜的样子。
有几回，邻舍孩子听得笑声，也赶热闹，围住了孔乙己。他便给他们茴香豆吃，一人一颗。孩子吃完豆，仍然不散，眼睛都望着碟子。孔乙己着了慌，伸开五指将碟子罩住，弯腰下去说道，“不多了，我已经不多了。”直起身又看一看豆，自己摇头说，“不多不多！多乎哉？不多也。”于是这一群孩子都在笑声里走散了。
孔乙己是这样的使人快活，可是没有他，别人也便这么过。
有一天，大约是中秋前的两三天，掌柜正在慢慢的结账，取下粉板，忽然说，“孔乙己长久没有来了。还欠十九个钱呢！”我才也觉得他的确长久没有来了。一个喝酒的人说道，“他怎么会来？……他打折了腿了。”掌柜说，“哦！”“他总仍旧是偷。这一回，是自己发昏，竟偷到丁举人家里去了。他家的东西，偷得的么？”“后来怎么样？”“怎么样？先写服辩，后来是打，打了大半夜，再打折了腿。”“后来呢？”“后来打折了腿了。”“打折了怎样呢？”“怎样？……谁晓得？许是死了。”掌柜也不再问，仍然慢慢的算他的账。
中秋之后，秋风是一天凉比一天，看看将近初冬；我整天的靠着火，也须穿上棉袄了。一天的下半天，没有一个顾客，我正合了眼坐着。忽然间听得一个声音，“温一碗酒。”这声音虽然极低，却很耳熟。看时又全没有人。站起来向外一望，那孔乙己便在柜台下对了门槛坐着。他脸上黑而且瘦，已经不成样子；穿一件破夹袄，盘着两腿，下面垫一个蒲包，用草绳在肩上挂住；见了我，又说道，“温一碗酒。”掌柜也伸出头去，一面说，“孔乙己么？你还欠十九个钱呢！”孔乙己很颓唐的仰面答道，“这……下回还清罢。这一回是现钱，酒要好。”掌柜仍然同平常一样，笑着对他说，“孔乙己，你又偷了东西了！”但他这回却不十分分辩，单说了一句“不要取笑！”“取笑？要是不偷，怎么会打断腿？”孔乙己低声说道，“跌断，跌，跌……”他的眼色，很像恳求掌柜，不要再提。此时已经聚集了几个人，便和掌柜都笑了。我温了酒，端出去，放在门槛上。他从破衣袋里摸出四文大钱，放在我手里，见他满手是泥，原来他便用这手走来的。不一会，他喝完酒，便又在旁人的说笑声中，坐着用这手慢慢走去了。
自此以后，又长久没有看见孔乙己。到了年关，掌柜取下粉板说，“孔乙己还欠十九个钱呢！”到第二年的端午，又说“孔乙己还欠十九个钱呢！”到中秋可是没有说，再到年关也没有看见他。
我到现在终于没有见——大约孔乙己的确死了。
我冒了严寒，回到相隔二千馀里，别了二十馀年的故乡去。
时候既然是深冬；渐近故乡时，天气又阴晦了，冷风吹进船舱中，呜呜的响，从蓬隙向外一望，苍黄的天底下，远近横著几个萧索的荒村，没有一些活气。我的心禁不住悲凉起来了。
阿！这不是我二十年来时时记得的故乡？
我所记得的故乡全不如此。我的故乡好得多了。但要我记起他的美丽，说出他的佳处来，却又没有影像，没有言辞了。仿佛也就如此。于是我自己解释说：故乡本也如此，——虽然没有进步，也未必有如我所感的悲凉，这只是我自己心情的改变罢了，因为我这次回乡，本没有什么好心绪。
我这次是专为了别他而来的。我们多年聚族而居的老屋，已经公同卖给别姓了，交屋的期限，只在本年，所以必须赶在正月初一以前，永别了熟识的老屋，而且远离了熟识的故乡，搬家到我在谋食的异地去。
第二日清早晨我到了我家的门口了。瓦楞上许多枯草的断茎当风抖著，正在说明这老屋难免易主的原因。几房的本家大约已经搬走了，所以很寂静。我到了自家的房外，我的母亲早已迎著出来了，接着便飞出了八岁的侄儿宏儿。
我的母亲很高兴，但也藏着许多凄凉的神情，教我坐下，歇息，喝茶，且不谈搬家的事。宏儿没有见过我，远远的对面站着只是看。
但我们终于谈到搬家的事。我说外间的寓所已经租定了，又买了几件家具，此外须将家里所有的木器卖去，再去增添。母亲也说好，而且行李也略已齐集，木器不便搬运的，也小半卖去了，只是收不起钱来。
“你休息一两天，去拜望亲戚本家一回，我们便可以走了。”母亲说。
“是的。”
“还有闰土，他每到我家来时，总问起你，很想见你一回面。我已经将你到家的大约日期通知他，他也许就要来了。”
这时候，我的脑里忽然闪出一幅神异的图画来：深蓝的天空中挂著一轮金黄的圆月，下面是海边的沙地，都种著一望无际的碧绿的西瓜，其间有一个十一二岁的少年，项带银圈，手捏一柄钢叉，向一匹猹尽力的刺去，那猹却将身一扭，反从他的胯下逃走了。
这少年便是闰土。我认识他时，也不过十多岁，离现在将有三十年了；那时我的父亲还在世，家景也好，我正是一个少爷。那一年，我家是一件大祭祀的值年。这祭祀，说是三十多年才能轮到一回，所以很郑重；正月里供祖像，供品很多，祭器很讲究，拜的人也很多，祭器也很要防偷去。我家只有一个忙月（我们这里给人做工的分三种：整年给一定人家做工的叫长工；按日给人做工的叫短工；自己也种地，只在过年过节以及收租时候来给一定人家做工的称忙月），忙不过来，他便对父亲说，可以叫他的儿子闰土来管祭器的。
我的父亲允许了；我也很高兴，因为我早听到闰土这名字，而且知道他和我仿佛年纪，闰月生的，五行缺土，所以他的父亲叫他闰土。他是能装弶捉小鸟雀的。
我于是日日盼望新年，新年到，闰土也就到了。好容易到了年末，有一日，母亲告诉我，闰土来了，我便飞跑的去看。他正在厨房里，紫色的圆脸，头戴一顶小毡帽，颈上套一个明晃晃的银项圈，这可见他的父亲十分爱他，怕他死去，所以在神佛面前许下愿心，用圈子将他套住了。他见人很怕羞，只是不怕我，没有旁人的时候，便和我说话，于是不到半日，我们便熟识了。
我们那时候不知道谈些什么，只记得闰土很高兴，说是上城之后，见了许多没有见过的东西。
第二日，我便要他捕鸟。他说：
“这不能。须大雪下了才好。我们沙地上，下了雪，我扫出一块空地来，用短棒支起一个大竹匾，撒下秕谷，看鸟雀来吃时，我远远地将缚在棒上的绳子只一拉，那鸟雀就罩在竹匾下了。什么都有：稻鸡，角鸡，鹁鸪，蓝背……”
我于是又很盼望下雪。
闰土又对我说：
“现在太冷，你夏天到我们这里来。我们日里到海边捡贝壳去，红的绿的都有，鬼见怕也有，观音手也有。晚上我和爹管西瓜去，你也去。”
“管贼么？”
“不是。走路的人口渴了摘一个瓜吃，我们这里是不算偷的。要管的是獾猪，刺猬，猹。月亮底下，你听，啦啦的响了，猹在咬瓜了。你便捏了胡叉，轻轻地走去……”
我那时并不知道这所谓猹的是怎么一件东西——便是现在也没有知道——只是无端的觉得状如小狗而很凶猛。
“他不咬人么？”
“有胡叉呢。走到了，看见猹了，你便刺。这畜生很伶俐，倒向你奔来，反从胯下窜了。他的皮毛是油一般的滑……”
我素不知道天下有这许多新鲜事：海边有如许五色的贝壳；西瓜有这样危险的经历，我先前单知道他在水果店里出卖罢了。
“我们沙地里，潮汛要来的时候，就有许多跳鱼儿只是跳，都有青蛙似的两个脚……”
阿！闰土的心里有无穷无尽的希奇的事，都是我往常的朋友所不知道的。他们不知道一些事，闰土在海边时，他们都和我一样只看见院子里高墙上的四角的天空。
可惜正月过去了，闰土须回家里去，我急得大哭，他也躲到厨房里，哭着不肯出门，但终于被他父亲带走了。他后来还托他的父亲带给我一包贝壳和几支很好看的鸟毛，我也曾送他一两次东西，但从此没有再见面。
现在我的母亲提起了他，我这儿时的记忆，忽而全都闪电似的苏生过来，似乎看到了我的美丽的故乡了。我应声说：
“这好极！他，——怎样？……”
“他？……他景况也很不如意……”母亲说著，便向房外看，“这些人又来了。说是买木器，顺手也就随便拿走的，我得去看看。”
母亲站起身，出去了。门外有几个女人的声音。我便招宏儿走近面前，和他闲话：问他可会写字，可愿意出门。
“我们坐火车去么？”
“我们坐火车去。”
“船呢？”
“先坐船，……”
“哈！这模样了！胡子这么长了！”一种尖利的怪声突然大叫起来。
我吃了一吓，赶忙抬起头，却见一个凸颧骨、薄嘴唇、五十岁上下的女人站在我面前，两手搭在髀间，没有系裙，张著两脚，正像一个画图仪器里细脚伶仃的圆规。
我愕然了。
“不认识了么？我还抱过你咧！”
我愈加愕然了。幸而我的母亲也就进来，从旁说：
“他多年出门，统忘却了。你该记得罢，”便向着我说，“这是斜对门的杨二嫂，……开豆腐店的。”
哦，我记得了。我孩子时候，在斜对门的豆腐店里确乎终日坐着一个杨二嫂，人都叫伊“豆腐西施”。但是擦著白粉，颧骨没有这么高，嘴唇也没有这么薄，而且终日坐着，我也从没有见过这圆规式的姿势。那时人说：因为伊，这豆腐店的买卖非常好。但这大约因为年龄的关系，我却并未蒙着一毫感化，所以竟完全忘却了。然而圆规很不平，显出鄙夷的神色，仿佛嗤笑法国人不知道拿破仑，美国人不知道华盛顿似的，冷笑说：
“忘了？这真是贵人眼高……”
“那有这事……我……”我惶恐著，站起来说。
“那么，我对你说。迅哥儿，你阔了，搬动又笨重，你还要什么这些破烂木器，让我拿去罢。我们小户人家，用得着。”
“我并没有阔哩。我须卖了这些，再去……”
“阿呀呀，你放了道台了，还说不阔？你现在有三房姨太太；出门便是八抬的大轿，还说不阔？吓，什么都瞒不过我。”
我知道无话可说了，便闭了口，默默的站着。
“阿呀阿呀，真是愈有钱，便愈是一毫不肯放松，愈是一毫不肯放松，便愈有钱……”圆规一面愤愤的回转身，一面絮絮的说，慢慢向外走，顺便将我母亲的一副手套塞在裤腰里，出去了。
此后又有近处的本家和亲戚来访问我。我一面应酬，偷空便收拾些行李，这样的过了三四天。
一日是天气很冷的午后，我吃过午饭，坐着喝茶，觉得外面有人进来了，便回头去看。我看时，不由的非常出惊，慌忙站起身，迎著走去。
这来的便是闰土。虽然我一见便知道是闰土，但又不是我这记忆上的闰土了。他身材增加了一倍；先前的紫色的圆脸，已经变作灰黄，而且加上了很深的皱纹；眼睛也像他父亲一样，周围都肿得通红，这我知道，在海边种地的人，终日吹着海风，大抵是这样的。他头上是一顶破毡帽，身上只一件极薄的棉衣，浑身瑟索著；手里提着一个纸包和一支长烟管，那手也不是我所记得的红活圆实的手，却又粗又笨而且开裂，像是松树皮了。
我这时很兴奋，但不知道怎么说才好，只是说：
“阿！闰土哥，——你来了？……”
我接着便有许多话，想要连珠一般涌出：角鸡，跳鱼儿，贝壳，猹，……但又总觉得被什么挡着似的，单在脑里面回旋，吐不出口外去。
他站住了，脸上现出欢喜和凄凉的神情；动着嘴唇，却没有作声。他的态度终于恭敬起来了，分明的叫道：
“老爷！……”
我似乎打了一个寒噤；我就知道，我们之间已经隔了一层可悲的厚障壁了。我也说不出话。
他回过头去说，“水生，给老爷磕头。”便拖出躲在背后的孩子来，这正是一个廿年前的闰土，只是黄瘦些，颈子上没有银圈罢了。“这是第五个孩子，没有见过世面，躲躲闪闪……”
母亲和宏儿下楼来了，他们大约也听到了声音。
“老太太。信是早收到了。我实在喜欢的不得了，知道老爷回来……”闰土说。
“阿，你怎的这样客气起来。你们先前不是哥弟称呼么？还是照旧：迅哥儿。”母亲高兴的说。
“阿呀，老太太真是……这成什么规矩。那时是孩子，不懂事……”闰土说著，又叫水生上来打拱，那孩子却害羞，紧紧的只贴在他背后。
“他就是水生？第五个？都是生人，怕生也难怪的；还是宏儿和他去走走。”母亲说。
宏儿听得这话，便来招水生，水生却松松爽爽同他一路出去了。母亲叫闰土坐，他迟疑了一回，终于就了坐，将长烟管靠在桌旁，递过纸包来，说：
“冬天没有什么东西了。这一点干青豆倒是自家晒在那里的，请老爷……”
我问问他的景况。他只是摇头。
“非常难。第六个孩子也会帮忙了，却总是吃不够……又不太平……什么地方都要钱，没有规定……收成又坏。种出东西来，挑去卖，总要捐几回钱，折了本；不去卖，又只能烂掉……”
他只是摇头；脸上虽然刻着许多皱纹，却全然不动，仿佛石像一般。他大约只是觉得苦，却又形容不出，沉默了片时，便拿起烟管来默默的吸烟了。
母亲问他，知道他的家里事务忙，明天便得回去；又没有吃过午饭，便叫他自己到厨下炒饭吃去。
他出去了；母亲和我都叹息他的景况：多子，饥荒，苛税，兵，匪，官，绅，都苦得他像一个木偶人了。母亲对我说，凡是不必搬走的东西，尽可以送他，可以听他自己去拣择。
下午，他拣好了几件东西：两条长桌，四个椅子，一副香炉和烛台，一杆抬秤。他又要所有的草灰（我们这里煮饭是烧稻草的，那灰，可以做沙地的肥料），待我们启程的时候，他用船来载去。
夜间，我们又谈些闲天，都是无关紧要的话；第二天早晨，他就领了水生回去了。
又过了九日，是我们启程的日期。闰土早晨便到了，水生没有同来，却只带着一个五岁的女儿管船只。我们终日很忙碌，再没有谈天的工夫。来客也不少，有送行的，有拿东西的，有送行兼拿东西的。待到傍晚我们上船的时候，这老屋里的所有破旧大小粗细东西，已经一扫而空了。
我们的船向前走，两岸的青山在黄昏中，都装成了深黛颜色，连着退向船后梢去。
宏儿和我靠著船窗，同看外面模糊的风景，他忽然问道：
“大伯！我们什么时候回来？”
“回来？你怎么还没有走就想回来了。”
“可是，水生约我到他家玩去咧……”他睁著大的黑眼睛，痴痴的想。
我和母亲也都有些惘然，于是又提起闰土来。母亲说，那豆腐西施的杨二嫂，自从我家收拾行李以来，本是每日必到的，前天伊在灰堆里，掏出十多个碗碟来，议论之后，便定说是闰土埋著的，他可以在运灰的时候，一齐搬回家里去；杨二嫂发见了这件事，自己很以为功，便拿了那狗气杀（这是我们这里养鸡的器具，木盘上面有着栅栏，内盛食料，鸡可以伸进颈子去啄，狗却不能，只能看着气死），飞也似的跑了，亏伊装着这么高低的小脚，竟跑得这样快。
老屋离我愈远了；故乡的山水也都渐渐远离了我，但我却并不感到怎样的留恋。我只觉得我四面有看不见的高墙，将我隔成孤身，使我非常气闷；那西瓜地上的银项圈的小英雄的影像，我本来十分清楚，现在却忽地模糊了，又使我非常的悲哀。
母亲和宏儿都睡着了。
我躺着，听船底潺潺的水声，知道我在走我的路。我想：我竟与闰土隔绝到这地步了，但我们的后辈还是一气，宏儿不是正在想念水生么。我希望他们不再像我，又大家隔膜起来……然而我又不愿意他们因为要一气，都如我的辛苦展转而生活，也不愿意他们都如闰土的辛苦麻木而生活，也不愿意都如别人的辛苦恣睢而生活。他们应该有新的生活，为我们所未经生活过的。
我想到希望，忽然害怕起来了。闰土要香炉和烛台的时候，我还暗地里笑他，以为他总是崇拜偶像，什么时候都不忘却。现在我所谓希望，不也是我自己手制的偶像么？只是他的愿望切近，我的愿望茫远罢了。
我在朦胧中，眼前展开一片海边碧绿的沙地来，上面深蓝的天空中挂著一轮金黄的圆月。我想：希望本是无所谓有，无所谓无的。这正如地上的路；其实地上本没有路，走的人多了，也便成了路。
EOT;

    protected static $encoding = 'UTF-8';

    protected static function explode($text)
    {
        $chars = array();

        foreach (preg_split('//u', str_replace(PHP_EOL, '', $text)) as $char) {
            if (! empty($char)) {
                $chars[] = $char;
            }
        }

        return $chars;
    }

    protected static function strlen($text)
    {
        return function_exists('mb_strlen')
            ? mb_strlen($text, static::$encoding)
            : count(static::explode($text));
    }

    protected static function validStart($word)
    {
        return ! in_array($word, static::$notBeginPunct);
    }

    protected static function appendEnd($text)
    {
        $mbAvailable = extension_loaded('mbstring');

        // extract the last char of $text
        if ($mbAvailable) {
            // in order to support php 5.3, third param use 1 instead of null
            // https://secure.php.net/manual/en/function.mb-substr.php#refsect1-function.mb-substr-changelog
            $last = mb_substr($text, mb_strlen($text, static::$encoding) - 1, 1, static::$encoding);
        } else {
            $chars = static::utf8Encoding($text);
            $last = $chars[count($chars) - 1];
        }

        // if the last char is a not-valid-end punctuation, remove it
        if (in_array($last, static::$notEndPunct)) {
            if ($mbAvailable) {
                $text = mb_substr($text, 0, mb_strlen($text, static::$encoding) - 1, static::$encoding);
            } else {
                array_pop($chars);
                $text = implode('', $chars);
            }
        }

        // if the last char is not a valid punctuation, append a default one.
        return in_array($last, static::$endPunct) ? $text : $text . '。';
    }

    /**
     * Convert original string to utf-8 encoding.
     *
     * @param string $text
     * @return array
     */
    protected static function utf8Encoding($text)
    {
        $encoding = array();

        $chars = str_split($text);

        $countChars = count($chars);

        for ($i = 0; $i < $countChars; ++$i) {
            $temp = $chars[$i];

            $ord = ord($chars[$i]);

            switch (true) {
                case $ord > 251:
                    $temp .= $chars[++$i];
                    // no break
                case $ord > 247:
                    $temp .= $chars[++$i];
                    // no break
                case $ord > 239:
                    $temp .= $chars[++$i];
                    // no break
                case $ord > 223:
                    $temp .= $chars[++$i];
                    // no break
                case $ord > 191:
                    $temp .= $chars[++$i];
                    // no break
            }

            $encoding[] = $temp;
        }

        return $encoding;
    }
}
