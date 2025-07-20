
//
// Copyright (C) 2018 David Carpenter
// 
// Permission is hereby granted, free of charge, 
// to any person obtaining a copy of this software 
// and associated documentation files (the "Software"), 
// to deal in the Software without restriction, 
// including without limitation the rights to use, 
// copy, modify, merge, publish, distribute, sublicense, 
// and/or sell copies of the Software, and to permit 
// persons to whom the Software is furnished to do so, 
// subject to the following conditions:
// 
// The above copyright notice and this permission notice shall be 
// included in all copies or substantial portions of the Software.
// 
// THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, 
// EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES 
// OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. 
// IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, 
// DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, 
// TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE 
// SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
//


// TODO:
// *broken urls are not found when specifying a second argument, it must be "" for broken urls to be found. -fixed

// compiler options
#pragma warning(disable : 4311) // type cast void * to unsigned int
#pragma warning(disable : 4312) // type cast unsigned int to void *
#pragma warning(disable : 4244) // warning C4244: 'argument' : conversion from 'LONG_PTR' to 'LONG', possible loss of data
#pragma warning(disable : 4996) // deprecation

#include <windows.h>
#include <stdio.h>

// 1.4.1

#define EVERYTHING_1_4_1_VERSION				"1.4.1.895" // undefined for no beta.

#define EVERYTHING_1_4_1_X64_INSTALLER			"Everything-"EVERYTHING_1_4_1_VERSION".x64-Setup.exe"
#define EVERYTHING_1_4_1_X86_INSTALLER			"Everything-"EVERYTHING_1_4_1_VERSION".x86-Setup.exe"
#define EVERYTHING_1_4_1_X64_EN_US_INSTALLER	"Everything-"EVERYTHING_1_4_1_VERSION".x64.en-US-Setup.exe"
#define EVERYTHING_1_4_1_X86_EN_US_INSTALLER	"Everything-"EVERYTHING_1_4_1_VERSION".x86.en-US-Setup.exe"
#define EVERYTHING_1_4_1_X64_MSI_INSTALLER		"Everything-"EVERYTHING_1_4_1_VERSION".x64.msi"
#define EVERYTHING_1_4_1_X86_MSI_INSTALLER		"Everything-"EVERYTHING_1_4_1_VERSION".x86.msi"
#define EVERYTHING_1_4_1_X64_ZIP				"Everything-"EVERYTHING_1_4_1_VERSION".x64.zip"
#define EVERYTHING_1_4_1_X86_ZIP				"Everything-"EVERYTHING_1_4_1_VERSION".x86.zip"
#define EVERYTHING_1_4_1_ARM_ZIP				"Everything-"EVERYTHING_1_4_1_VERSION".ARM.zip"
#define EVERYTHING_1_4_1_X64_EN_US_ZIP			"Everything-"EVERYTHING_1_4_1_VERSION".x64.en-US.zip"
#define EVERYTHING_1_4_1_X86_EN_US_ZIP			"Everything-"EVERYTHING_1_4_1_VERSION".x86.en-US.zip"
#define EVERYTHING_1_4_1_ARM_EN_US_ZIP			"Everything-"EVERYTHING_1_4_1_VERSION".ARM.en-US.zip"

#define EVERYTHING_1_4_1_MD5					"Everything-"EVERYTHING_1_4_1_VERSION".md5"
#define EVERYTHING_1_4_1_SHA1					"Everything-"EVERYTHING_1_4_1_VERSION".sha1"
#define EVERYTHING_1_4_1_SHA256					"Everything-"EVERYTHING_1_4_1_VERSION".sha256"

#define EVERYTHING_1_4_1_CHANGES				"Changes.txt"

// 1.3.4

#define EVERYTHING_1_3_4_VERSION			"1.3.4.686" // undefined for no beta.

#define EVERYTHING_1_3_4_X64_INSTALLER				"Everything-"EVERYTHING_1_3_4_VERSION".x64-Setup.exe"
#define EVERYTHING_1_3_4_X86_INSTALLER				"Everything-"EVERYTHING_1_3_4_VERSION".x86-Setup.exe"
#define EVERYTHING_1_3_4_X64_MULTILINGUAL_INSTALLER	"Everything-"EVERYTHING_1_3_4_VERSION".x64.Multilingual-Setup.exe"
#define EVERYTHING_1_3_4_X86_MULTILINGUAL_INSTALLER	"Everything-"EVERYTHING_1_3_4_VERSION".x86.Multilingual-Setup.exe"
#define EVERYTHING_1_3_4_X64_ZIP						"Everything-"EVERYTHING_1_3_4_VERSION".x64.zip"
#define EVERYTHING_1_3_4_X86_ZIP						"Everything-"EVERYTHING_1_3_4_VERSION".x86.zip"
#define EVERYTHING_1_3_4_X64_MULTILINGUAL_ZIP		"Everything-"EVERYTHING_1_3_4_VERSION".x64.Multilingual.zip"
#define EVERYTHING_1_3_4_X86_MULTILINGUAL_ZIP		"Everything-"EVERYTHING_1_3_4_VERSION".x86.Multilingual.zip"

#define EVERYTHING_1_3_4_MD5				"Everything-"EVERYTHING_1_3_4_VERSION".md5"
#define EVERYTHING_1_3_4_SHA1				"Everything-"EVERYTHING_1_3_4_VERSION".sha1"
#define EVERYTHING_1_3_4_SHA256				"Everything-"EVERYTHING_1_3_4_VERSION".sha256"

#define EVERYTHING_1_3_4_CHANGES			"Changes-"EVERYTHING_1_3_4_VERSION".txt"

//
/*
#define EVERYTHING_BETA_VERSION				"1.4.1.873b" // undefined for no beta.

#define EVERYTHING_BETA_X64_INSTALLER		"Everything-"EVERYTHING_BETA_VERSION".x64-Setup.exe"
#define EVERYTHING_BETA_X86_INSTALLER		"Everything-"EVERYTHING_BETA_VERSION".x86-Setup.exe"
#define EVERYTHING_BETA_X64_EN_US_INSTALLER	"Everything-"EVERYTHING_BETA_VERSION".x64.en-US-Setup.exe"
#define EVERYTHING_BETA_X86_EN_US_INSTALLER	"Everything-"EVERYTHING_BETA_VERSION".x86.en-US-Setup.exe"
#define EVERYTHING_BETA_X64_MSI_INSTALLER	"Everything-"EVERYTHING_BETA_VERSION".x64.msi"
#define EVERYTHING_BETA_X86_MSI_INSTALLER	"Everything-"EVERYTHING_BETA_VERSION".x86.msi"
#define EVERYTHING_BETA_X64_ZIP				"Everything-"EVERYTHING_BETA_VERSION".x64.zip"
#define EVERYTHING_BETA_X86_ZIP				"Everything-"EVERYTHING_BETA_VERSION".x86.zip"
#define EVERYTHING_BETA_X64_EN_US_ZIP		"Everything-"EVERYTHING_BETA_VERSION".x64.en-US.zip"
#define EVERYTHING_BETA_X86_EN_US_ZIP		"Everything-"EVERYTHING_BETA_VERSION".x86.en-US.zip"

#define EVERYTHING_BETA_MD5					"Everything-"EVERYTHING_BETA_VERSION".md5"
#define EVERYTHING_BETA_SHA1				"Everything-"EVERYTHING_BETA_VERSION".sha1"
#define EVERYTHING_BETA_SHA256				"Everything-"EVERYTHING_BETA_VERSION".sha256"

#define EVERYTHING_BETA_CHANGES				"Changes.txt"
*/

#define ES_VERSION							"1.1.0.10"
#define ES_ZIP								"ES-"ES_VERSION".zip"

//#define HOST ""
//#define HOST "www.voidtools.com"
//#define HOST "file://C:/dev/Everything/voidtools"

enum
{
	PAGE_HOME=0,
	PAGE_DOWNLOAD,
	PAGE_FAQ,
	PAGE_SUPPORT,
	PAGE_FORUM,
	PAGE_DONATE,
	PAGE_CONTACT,
	PAGE_COUNT,
};

#define STRING_DEFINE(id,text) STRING_ID_##id,
enum 
{
	#include "strings.h"
	STRING_ID_COUNT,

};

#undef STRING_DEFINE

#define STRING_DEFINE(id,text) text,

const char *string_texts[]=
{
	#include "strings.h"
};

#undef STRING_DEFINE

#define STRING_DEFINE(id,text) #id,

const char *string_keys[]=
{
	#include "strings.h"
};

#undef STRING_DEFINE

#define INVALID_PAGE -1

int page_name_ids[PAGE_COUNT] = {
	STRING_ID_HOME,
	STRING_ID_DOWNLOADS,
	STRING_ID_FAQ,
	STRING_ID_SUPPORT,
	STRING_ID_FORUMS,
	STRING_ID_DONATE,
	STRING_ID_CONTACT,
};

typedef struct language_s
{	
	struct language_s *next;
	char *code;
	char *name;
	char *strings[STRING_ID_COUNT];
	int is_rtl;
	
}language_t;

typedef struct id_s
{
	struct id_s *next;
	char *name;
	
}id_t;

typedef struct resource_s
{
	struct resource_s *next;
	char *name;
	
}resource_t;

typedef struct url_s
{
	struct url_s *next;
	wchar_t filename[MAX_PATH];
	int line;
	char url[1024];
	
}url_t;

typedef struct known_url_s
{
	struct known_url_s *next;
	char url[1024];
	
}known_url_t;

static void wiki(const char *path);
static void forward_slash_to_back_slash(char *p);
static void forward_slash_to_back_slashW(wchar_t *p);
static int makevoidtools_isws(char c);
static int makevoidtools_check(char **pp,const char *str);
static void makevoidtools_trim(char *s);
static char *makevoidtools_decode_base64(char *s);
static void makevoidtools_remove_newlines(char *s);
static char *makevoidtools_get_csv_value(char *buf,char *p);
static void getaname(char *buf,const char *s);
static void fprintf_file(FILE *o,const char *filename);
static void wchar_copy_utf8(wchar_t *buf,const char *s1);
char *stralloc(const char *s);
static void get_link(char *buf,int page_id);
static void get_title(char *buf,const char *subtitle);
static void language_scan(void);
static language_t *language_add(const wchar_t *filename,const char *code);
static language_t *language_find(const char *code);
static int string_find_key(const char *key);
static void strreplace(char *buf,const char *key,const char *value);
static void get_string(char *buf,int id,const char *key,const char *value);
static int is_absolute_url(const char *s);
static void wiki_clear(void);
void write_template(const char *html_filename,const char *template_filename,int template_id,const char *title,int page);
static char *skip_utf8_bom(char *p);
static void write_toc(FILE *o,const wchar_t *path_and_filename_wbuf);
static void get_template_url(char *buf,int id);
static void write_macro(FILE *o,char *code);
static void makelocalurl(char *buf,const char *url);
static void copy_local_file(const char *filename);
static char *skipws(char *p);
static struct wiki_s *wiki_find(struct wiki_s *parent,const char *name);
static int is_url_protocol(const char *s);
static void write_template_file(FILE *o,const char *filename);
static void wiki_scan(const wchar_t *path,const wchar_t *subpath,int depth,struct wiki_s *parent);
static void add_resource(const char *url);
static void url_add(const wchar_t *filename,int line,const char *url_text);
static known_url_t *find_known_url(const char *url);
static known_url_t *known_url_add(const char *url,const char *hash,int add_slash);
static void url_clear(void);
static void known_url_clear(void);
static wchar_t *wchar_file_part(wchar_t *p);
static void get_wiki_title(char *buf,const wchar_t *filename);
static int utf8_tolower(int c);

FILETIME exe_filetime;
int current_page;
wchar_t current_folder[MAX_PATH]=L"";
id_t *id_start = 0;
id_t *id_last = 0;
resource_t *resource_start = 0;
resource_t *resource_last = 0;
char id_last_h[1024];
wchar_t file_path_root[MAX_PATH];
wchar_t file_path_local[MAX_PATH];
wchar_t language_subfolder[MAX_PATH];
char url_path_root[MAX_PATH];
char url_path_local[MAX_PATH];
int errors=0;
int warnings=0;
language_t *language_start = 0;
language_t *language_last = 0;
const char **strings = string_texts;
int is_rtl = 0;
int minwidth = 720;
int wiki_min_width = 920;
int wiki_nav_width = 224;
char short_lang_code[MAX_PATH] = "";
char language_code[MAX_PATH] = "";
url_t *url_start = 0;
url_t *url_last = 0;
known_url_t *known_url_start = 0;
known_url_t *known_url_last = 0;
char known_url_buf[MAX_PATH];

int isws(int c)
{
	if (c == '\r') return 1;
	if (c == '\n') return 1;
	if (c == '\t') return 1;
	if (c == ' ') return 1;
	
	return 0;
}

char *stralloc(const char *s)
{
	int len;
	char *p;
	
	len = (int)strlen((char *)s);
	p = (char*)malloc(len + 1);
	strcpy((char *)p,(const char *)s);
	
	return p;
}

id_t *id_find(const char *name)
{
	id_t *id;
	
	id = id_start;
	while(id)
	{
		if (stricmp((const char *)id->name,(const char *)name) == 0)
		{
			return id;
		}
	
		id = id->next;
	}
	
	return 0;
}

id_t *id_add(const char *name)
{
	id_t *id;
	
	if (id_find(name))
	{
		printf("id %s already exists\n",name);
		
		return 0;
	}
	
	id = (id_t *)malloc(sizeof(id_t));
	
	id->name = stralloc(name);
	
	if (id_start)
	{
		id_last->next = id;
	}
	else
	{
		id_start = id;
	}
	
	id->next = 0;
	id_last = id;
	
	return id;
}

void id_clear(void)
{
	id_start = 0;
	id_last = 0;
}


resource_t *resource_find(const char *name)
{
	resource_t *resource;
	
	resource = resource_start;
	while(resource)
	{
		if (stricmp((const char *)resource->name,(const char *)name) == 0)
		{
			return resource;
		}
	
		resource = resource->next;
	}
	
	return 0;
}

resource_t *resource_add(const char *name)
{
	resource_t *resource;
	
	resource = resource_find(name);
	if (resource)
	{
		return resource;
	}
	
	resource = (resource_t *)malloc(sizeof(resource_t));
	
	resource->name = stralloc(name);
	
	if (resource_start)
	{
		resource_last->next = resource;
	}
	else
	{
		resource_start = resource;
	}
	
	resource->next = 0;
	resource_last = resource;

//	printf("resource: %s\n",name);
	
	return resource;
}

void resource_clear(void)
{
	resource_start = 0;
	resource_last = 0;
}

void style_css(FILE *f)
{
	// IE shit..
	fprintf(f,"* {margin:0;padding:0;} ");

	fprintf(f,"body {");

	fprintf(f,"min-width:%dpx;",minwidth);
	fprintf(f,"font-family:Arial,sans-serif;");
	fprintf(f,"font-size:13px;");
	fprintf(f,"color:#000;");
	if (is_rtl)
	{
		fprintf(f,"text-align:right;");
	}
	else
	{
		fprintf(f,"text-align:left;");
	}
	fprintf(f,"background-color:#F8F8F8;");
	fprintf(f,"padding:0px;");
	fprintf(f,"margin:0px;");
	fprintf(f,"}");

	fprintf(f,".top {");
	fprintf(f,"background-color:#000000;");
	fprintf(f,"height:110px;");
	fprintf(f,"border-bottom:1px solid #bbbbbb;");
	fprintf(f,"text-align:center;");
	fprintf(f,"}");

	// we must specify the color again in case we have a horizontal scroll.
	fprintf(f,".topcenter {");
	fprintf(f,"background-color:#000000; margin:0 auto; width:%dpx;",minwidth);
	if (is_rtl)
	{
		fprintf(f,"text-align:right;");
	}
	else
	{
		fprintf(f,"text-align:left;");
	}
	fprintf(f,"}");

	fprintf(f,"h1 {");
	fprintf(f,"font-size:2em;");
	fprintf(f,"font-weight:normal;");
	fprintf(f,"margin-bottom:12px;");
	fprintf(f,"}");
	
	fprintf(f,"h2 { ");
	fprintf(f,"font-weight:normal;");
	fprintf(f,"font-size:1.4em;");
	fprintf(f,"margin-top:32px;");
	fprintf(f,"margin-bottom:12px;");
	fprintf(f,"} ");

	fprintf(f,"img {");
	fprintf(f,"border:0;vertical-align:bottom;");
	fprintf(f,"}");

	fprintf(f,"a {");
	fprintf(f,"text-decoration:none;");
	fprintf(f,"}");	
		
	fprintf(f,"a:hover {");
	fprintf(f,"text-decoration:underline;");
	fprintf(f,"}");	

	fprintf(f,"p {");
	fprintf(f,"margin-bottom:4px;");
	fprintf(f,"}");	

//	fprintf(f,"li {");
//	fprintf(f,"margin-bottom:4px;");
//	fprintf(f,"}");	

	fprintf(f,"pre {");
//	fprintf(f,"width:100%%;"); // fix ie5, breaks htmlhelp.
	fprintf(f,"overflow:auto;");
	fprintf(f,"margin-bottom:4px;");
	fprintf(f,"}");	

	fprintf(f,".menu {");
	fprintf(f,"background-color:#F8F8F8;");
	fprintf(f,"border-bottom:1px solid #bbbbbb;");
	fprintf(f,"text-align:center;");
	fprintf(f,"}");	
	
	// we must specify the color again in case we have a horizontal scroll.
	fprintf(f,".menucenter {");
	fprintf(f,"background-color:#F8F8F8; margin:0 auto; width:%dpx;",minwidth);
	fprintf(f,"text-align:left;");
	fprintf(f,"}");	

	fprintf(f,".menuitem {");
	if (is_rtl)
	{
		fprintf(f,"float:right;");
	}
	else
	{
		fprintf(f,"float:left;");
	}
//	fprintf(f,"border-top:1px solid #f8f8f8;");
//	fprintf(f,"margin-top:-1px;");
//	fprintf(f,"position:relative;");
	fprintf(f,"border-left:1px solid #f8f8f8;");
	fprintf(f,"border-right:1px solid #f8f8f8;");
//	fprintf(f,"border-left:1px solid #dddddd;");
//	fprintf(f,"border-right:1px solid #dddddd;");
//	fprintf(f,"margin-left:-1px;");
//	fprintf(f,"margin-right:-1px;");
	fprintf(f,"}");			
/*
	fprintf(f,".menuitem:hover {");
	fprintf(f,"background-color:#f0f0f0;");
	fprintf(f,"border-left:1px solid #bbbbbb;");
	fprintf(f,"border-right:1px solid #bbbbbb;");
	fprintf(f,"margin-left:-1px;");
	fprintf(f,"margin-right:-1px;");
//	fprintf(f,"margin-left:-1px;");
//	fprintf(f,"margin-right:-1px;");
	fprintf(f,"}");			
*/
	fprintf(f,".curmenuitem {");
	if (is_rtl)
	{
		fprintf(f,"float:right;");
	}
	else
	{
		fprintf(f,"float:left;");
	}
	fprintf(f,"background-color:#ffffff;");
//	fprintf(f,"border-top:1px solid #bbbbbb;");
	fprintf(f,"border-bottom:1px solid #ffffff;");
	fprintf(f,"border-left:1px solid #bbbbbb;");
	fprintf(f,"border-right:1px solid #bbbbbb;");
//	fprintf(f,"margin-left:-1px;");
//	fprintf(f,"margin-right:-1px;");
	fprintf(f,"margin-bottom:-1px;");
//	fprintf(f,"margin-top:-1px;");
	fprintf(f,"position:relative;");
	fprintf(f,"}");	

	fprintf(f,".menuitem a {");
	fprintf(f,"color:#000;");
	fprintf(f,"display:block;");
	fprintf(f,"padding:8px 8px;");
	fprintf(f,"}");	
	
	fprintf(f,".search {");
	if (is_rtl)
	{
		fprintf(f,"direction:ltr;");
		fprintf(f,"float:left;");
	}
	else
	{
		fprintf(f,"float:right;");
	}

	fprintf(f,"}");			

	fprintf(f,".search form {");
	fprintf(f,"color:#000; display:block; padding-left:8px; padding-right:8px;");
	fprintf(f,"}");			

	fprintf(f,".searchedit {");
	fprintf(f,"background-color:#ffffff;");
	fprintf(f,"color:#000; display:block; margin-top:5px; padding-top:2px; padding-bottom:2px; padding-left:4px; padding-right:16px;");
	fprintf(f,"border:1px solid #bbbbbb;");
	fprintf(f,"background-image:url(%s/searchicon.png);",url_path_root);
	fprintf(f,"background-repeat:no-repeat;");
	fprintf(f,"background-position:right center;");
	fprintf(f,"}");			
/*
	fprintf(f,".searchedit:focus {");
	fprintf(f,"background-color:#ffffff;");
	fprintf(f,"}");			
*/

	
	fprintf(f,".curmenuitem a {");
	fprintf(f,"color:#000;  display:block; padding:8px 8px");
	fprintf(f,"}");	
	
	fprintf(f,".endmenuitem {");
	fprintf(f,"clear:both;");
	fprintf(f,"}");	
	
	fprintf(f,".content {");
	fprintf(f,"background-color:#ffffff;");
	fprintf(f,"text-align:center;");
	fprintf(f,"}");
	
	// we must specify the color again in case we have a horizontal scroll.
	fprintf(f,".contentcenter {");
	fprintf(f,"background-color:#ffffff; margin:0 auto; width:%dpx;",minwidth);
	fprintf(f,"text-align:left;");
	fprintf(f,"}");
	
	fprintf(f,".contentpadding {");
	fprintf(f,"padding-top:32px;");
	fprintf(f,"padding-bottom:32px;");
	fprintf(f,"padding-left:8px;");
	fprintf(f,"padding-right:8px;");
	if (is_rtl)
	{
		fprintf(f,"direction:ltr;");
	}
	fprintf(f,"}");
	
	
	fprintf(f,".contentpadding ul { ");

	
	if (is_rtl)
	{
		fprintf(f,"padding-right:16px; ");
		fprintf(f,"padding-left:16px; "); // have to do both. some content is ltr
	}
	else
	{
		fprintf(f,"padding-left:16px; ");
	}

//	fprintf(f,"padding-bottom:12px; ");
	fprintf(f,"} ");

	fprintf(f,".bot {");
	fprintf(f,"background-color:#f8f8f8;");
	fprintf(f,"border-top:1px solid #C0C0C0;");
	fprintf(f,"text-align:center;");
//	fprintf(f,"border-bottom:1px solid #FFE54E;");
	fprintf(f,"}");
		
	// we must specify the color again in case we have a horizontal scroll.
	fprintf(f,".botcenter {");
	fprintf(f,"margin:0 auto; width:%dpx;",minwidth);
	fprintf(f,"background-color:#f8f8f8;");
	fprintf(f,"text-align:center;");
	fprintf(f,"height:48px;");
	fprintf(f,"margin-top:16px;");
	fprintf(f,"}");

	fprintf(f,".botcenter a {");
	fprintf(f,"margin-left:16px;");
	fprintf(f,"margin-right:16px;");
	fprintf(f,"}");

	fprintf(f,".botpadding {");
	fprintf(f,"padding:6px 8px;");
	fprintf(f,"text-align:center;");
	fprintf(f,"}");

	fprintf(f,".bot2 {");
	fprintf(f,"background-color:#f8f8f8;");
	fprintf(f,"height:64px;");
	fprintf(f,"text-align:center;");
	fprintf(f,"}");
		
	// we must specify the color again in case we have a horizontal scroll.
	fprintf(f,".botcenter2 {");
	fprintf(f,"margin:0 auto; width:%dpx;",minwidth);
	fprintf(f,"background-color:#f8f8f8;");
	fprintf(f,"text-align:center;");
	fprintf(f,"font-size:11px;");
	fprintf(f,"}");

	fprintf(f,".botcenter2 a {");
//	fprintf(f,"color:#666666;");
	fprintf(f,"}");

///////////////////////////

	fprintf(f,".button {");
	fprintf(f,"font-size:15px;");
	fprintf(f,"text-align:center;");
	if (is_rtl)
	{
		fprintf(f,"float:right;");
	}
	else
	{
		fprintf(f,"float:left;");
	}
	fprintf(f,"display:block;");
	fprintf(f,"background-color:#f8f8f8;");
	fprintf(f,"border:1px solid #bbbbbb;");
	fprintf(f,"padding:12px;");
	fprintf(f,"margin-bottom:12px;");
	
	if (is_rtl)
	{
		fprintf(f,"margin-left:12px;");
	}
	else
	{
		fprintf(f,"margin-right:12px;");
	}
	fprintf(f,"color:#000000;");
	fprintf(f,"}");
/*
	fprintf(f,".button:hover {");
	fprintf(f,"background-color:#f0f0f0;");
	fprintf(f,"}");
*/
/*
	fprintf(f,".button {");
	fprintf(f,"font-size:15px;");
	fprintf(f,"text-align:center;");
	fprintf(f,"float:left;");
	fprintf(f,"display:block;");
	fprintf(f,"background-color:#404040;");
//	fprintf(f,"border-bottom:2px solid #000000;");
//	fprintf(f,"border:1px solid #404040;");
	fprintf(f,"padding:12px;");
	fprintf(f,"margin-bottom:12px;");
	fprintf(f,"margin-right:12px;");
	fprintf(f,"color:#ffffff;");
	fprintf(f,"}");
*/
/*
	fprintf(f,".button {");
	fprintf(f,"font-size:15px;");
	fprintf(f,"text-align:center;");
	fprintf(f,"float:left;");
	fprintf(f,"display:block;");
	fprintf(f,"background-color:#404040;");
//	fprintf(f,"border-bottom:2px solid #000000;");
//	fprintf(f,"border:1px solid #404040;");
	fprintf(f,"border-top:1px solid #808080;");
	fprintf(f,"border-bottom:1px solid #000000;");
	fprintf(f,"padding:12px;");
	fprintf(f,"margin-bottom:12px;");
	fprintf(f,"margin-right:12px;");
	fprintf(f,"color:#ffffff;");
	fprintf(f,"border-radius:2px;");
	fprintf(f,"-moz-border-radius:2px;");
	fprintf(f,"-webkit-border-radius:2px;");
	fprintf(f,"-webkit-box-shadow: 0px 0px 0px 1px #404040;");
	fprintf(f,"-moz-box-shadow: 0px 0px 0px 1px #404040;");
	fprintf(f,"box-shadow: 0px 0px 0px 1px #404040;");
	fprintf(f,"}");

	fprintf(f,".button:hover {");
	fprintf(f,"background-color:#505050;");
//	fprintf(f,"border-top:1px solid #404040;");
//	fprintf(f,"border-bottom:1px solid #404040;");
	fprintf(f,"}");
*/	
	/*
	fprintf(f,".button:active {");
	fprintf(f,"background-color:#000000;");
	fprintf(f,"border-top:1px solid #000000;");
	fprintf(f,"border-bottom:1px solid #808080;");
	fprintf(f,"}");
*/

	fprintf(f,".screenshot {");
	if (is_rtl)
	{
		fprintf(f,"float: right;");
		fprintf(f,"margin-left:32px");
	}
	else
	{
		fprintf(f,"float: left;");
		fprintf(f,"margin-right:32px");
	}
	fprintf(f,"}");

	fprintf(f,".cli {");
//	fprintf(f,"padding:0;");
//	fprintf(f,"margin:0;");
	fprintf(f,"background:url(%s/cli.png) no-repeat;",url_path_root);
	fprintf(f,"background-position:left center;");
	fprintf(f,"padding-left:20px;");
	fprintf(f,"}");

	fprintf(f,".de {");
//	fprintf(f,"padding:0;");
//	fprintf(f,"margin:0;");
	fprintf(f,"background:url(%s/e2.png) no-repeat;",url_path_root);
	fprintf(f,"background-position:left center;");
	fprintf(f,"padding-left:20px;");
	fprintf(f,"}");

	fprintf(f,".de134 {");
//	fprintf(f,"padding:0;");
//	fprintf(f,"margin:0;");
	fprintf(f,"background:url(%s/e2-1.3.png) no-repeat;",url_path_root);
	fprintf(f,"background-position:left center;");
	fprintf(f,"padding-left:20px;");
	fprintf(f,"}");

	// h file
	fprintf(f,".di {");
//	fprintf(f,"padding:0;");
//	fprintf(f,"margin:0;");
	fprintf(f,"background:url(%s/h.png) no-repeat;",url_path_root);
	fprintf(f,"background-position:left center;");
	fprintf(f,"padding-left:20px;");
	fprintf(f,"}");

	// c file (source)
	fprintf(f,".ds {");
//	fprintf(f,"padding:0;");
//	fprintf(f,"margin:0;");
	fprintf(f,"background:url(%s/c.png) no-repeat;",url_path_root);
	fprintf(f,"background-position:left center;");
	fprintf(f,"padding-left:20px;");
	fprintf(f,"}");

	fprintf(f,".dc {");
	fprintf(f,"background:url(%s/cl.png) no-repeat;",url_path_root);
	fprintf(f,"background-position:left center;");
	fprintf(f,"padding-left:20px;");
	fprintf(f,"}");	
	
	fprintf(f,".dltable {");
	fprintf(f,"border-collapse:collapse;");
	fprintf(f,"}");	
	
//FIXME:we shouldn't be using p's
	fprintf(f,".dltable p {");
	fprintf(f,"margin:6px;");
	fprintf(f,"}");		

	fprintf(f,".dltable td {");
	fprintf(f,"padding-right:24px;");
//	fprintf(f,"padding-top:12px;");
//	fprintf(f,"padding-bottom:12px;");
	fprintf(f,"padding-top:4px;");
	fprintf(f,"padding-bottom:4px;");
//	fprintf(f,"border-bottom:1px solid #C0C0C0;");
	fprintf(f,"border-top:1px solid #C0C0C0;");
	fprintf(f,"}");	
	
	fprintf(f,".leftdot {");
	fprintf(f,"background:url(%s/dot.png) no-repeat;",url_path_root);
	fprintf(f,"background-position:center center;");
	fprintf(f,"width:16px;");
//	fprintf(f,"margin-left:8px;");

	
	if (is_rtl)
	{
		fprintf(f,"padding-right:16px;");
	}
	else
	{
		fprintf(f,"padding-left:16px;");
	}

//	fprintf(f,"border-bottom:1px solid #FABF3A;");
//	fprintf(f,"border-top:1px solid #FABF3A;");
//	fprintf(f,"background-color:#FFFEF7;");
	fprintf(f,"}");	
	
	fprintf(f,"code {");
	fprintf(f,"white-space:nowrap;");
	fprintf(f,"}");
	
	fprintf(f,".donatehistorytable {");
	fprintf(f,"border-collapse: collapse;");
	fprintf(f,"}");

	fprintf(f,".donatehistorytable th {");
	fprintf(f,"border-bottom:1px solid #bbbbbb;");
	fprintf(f,"padding:8px;");
	fprintf(f,"}");

	fprintf(f,".donatehistorytable td {");
	fprintf(f,"border-bottom:1px solid #dddddd;");
	fprintf(f,"padding:8px;");
	fprintf(f,"}");

/*	
	fprintf(f,".corner-box ul {");
	fprintf(f,"padding-left:16px; ");
	fprintf(f,"padding-bottom:12px; ");
	fprintf(f,"}");	
	*/
}

void wiki_css(FILE *f,int expandsdk)
{
	fprintf(f,"body {");
	fprintf(f,"min-width:%dpx;",wiki_min_width);
	fprintf(f,"}");

	fprintf(f,".wiki {");
	fprintf(f,"background-color:#ffffff;");
	fprintf(f,"text-align:center;");
	fprintf(f,"}");	

	fprintf(f,".wikicenter {");
	fprintf(f,"background-color:#ffffff; margin:0 auto; width:%dpx;",wiki_min_width);
	fprintf(f,"text-align:left;");
	fprintf(f,"}");	
	
	fprintf(f,".wikipadding {");
	fprintf(f,"padding-top:32px;");
	fprintf(f,"padding-bottom:32px;");
	fprintf(f,"padding-left:12px;");
	fprintf(f,"padding-right:12px;");
	if (is_rtl)
	{
		fprintf(f,"direction:ltr;");
	}
	fprintf(f,"}");	
	
	fprintf(f,".wikinav li {");
	fprintf(f,"list-style-type:none;");
//	fprintf(f,"padding-bottom:6px;");
	fprintf(f,"}");	
	
	fprintf(f,".wikinav {");
//	fprintf(f,"border-right:1px solid #FFE54E;");
	fprintf(f,"float:left;");
	fprintf(f,"min-height:50px;");
    
    

/*	if (depth >= 1)
	{
		fprintf(f,"width:288px;");
	}
	else
*/	{
		fprintf(f,"width:%dpx;",wiki_nav_width);
	}

	if (expandsdk)
	{
		fprintf(f,"overflow:auto;");
	}
	else
	{
		fprintf(f,"overflow:hidden;");
	}
//	fprintf(f,"vertical-align:top; ");
	fprintf(f,"}");	
	
	fprintf(f,".wikinavindent2 {");
	fprintf(f,"margin-left:12px;");
	fprintf(f,"white-space:nowrap;");
	fprintf(f,"}");	
	
	fprintf(f,".wikinavindent3 {");
	fprintf(f,"margin-left:24px;");
	fprintf(f,"white-space:nowrap;");
	fprintf(f,"}");	
	
	fprintf(f,".wikicontent {");
//	fprintf(f,"margin-left:240px;");
	fprintf(f,"width:666px;"); // leave 6 pixels for a middle gap
	fprintf(f,"float:right;");
//	fprintf(f,"overflow:hidden;");
	fprintf(f,"min-height:50px;");
//	fprintf(f,"padding:12px;");
//	fprintf(f,"vertical-align:top; ");
	fprintf(f,"}");	
	
	fprintf(f,".wikicontent ul { ");
	fprintf(f,"padding-left:16px; ");
//	fprintf(f,"padding-bottom:12px; ");
	fprintf(f,"} ");
	
	fprintf(f,".wikicontent table {");
	fprintf(f,"border-collapse:collapse;");
	fprintf(f,"margin-bottom:6px;");
	fprintf(f,"}");	

	fprintf(f,".wikicontent td, .wikicontent th {");
	fprintf(f,"padding-right:24px;");
	fprintf(f,"padding-top:8px;");
	fprintf(f,"padding-bottom:8px;");
	fprintf(f,"padding-left:8px;");
	fprintf(f,"vertical-align:top;");
	fprintf(f,"text-align:left;");
	fprintf(f,"}");	

	fprintf(f,".wikicontent td {");
	fprintf(f,"border-bottom:1px solid #CCCCCC;");
	fprintf(f,"border-top:1px solid #CCCCCC;");
	fprintf(f,"}");	

	fprintf(f,".wikicontent dl {");
	fprintf(f,"padding-bottom:12px;");
	fprintf(f,"}");	

	fprintf(f,".wikicontent dt {");
	fprintf(f,"maring-bottom:3px;");
	fprintf(f,"}");	

	fprintf(f,".wikicontent dd {");
	fprintf(f,"margin-left:24px;");
	fprintf(f,"padding-bottom:12px;");
	fprintf(f,"}");	

	fprintf(f,".wikicontent pre {");
	fprintf(f,"border:1px solid #CCCCCC;");
//	fprintf(f,"background-color:#eee;");
	fprintf(f,"padding:12px;");
	fprintf(f,"}");

	fprintf(f,".wikinowrap {");
	fprintf(f,"white-space:nowrap;");
	fprintf(f,"}");
/*	
	fprintf(f,".wikiindent1 {");
	fprintf(f,"padding-left:32px;");
	fprintf(f,"}");
*/	

}

void faq_css(FILE *f)
{
/*
	fprintf(f,".faqcontent { ");
//	fprintf(f,"display:inline;");
//	fprintf(f,"width:470px; ");
//	fprintf(f,"display:inline-block;");
//	fprintf(f,"padding-left:10px; ");
//	fprintf(f,"float:right");
	fprintf(f,"} ");
*/
	fprintf(f,".toc { ");
	fprintf(f,"border:1px solid #CCCCCC;");
	fprintf(f,"padding:6px; ");
	fprintf(f,"} ");
	
	fprintf(f,".toc ul { ");
	fprintf(f,"list-style-type:none");
	fprintf(f,"} ");
	
	fprintf(f,".toclvl1 { ");
	fprintf(f,"white-space:nowrap;");
	fprintf(f,"} ");
	
	fprintf(f,".toclvl2 { ");
	fprintf(f,"margin-left:32px; ");
	fprintf(f,"white-space:nowrap;");
	fprintf(f,"} ");
	
	fprintf(f,".faqcontent ul {");
	fprintf(f,"padding-left:16px; ");
	fprintf(f,"}");	
	
//	fprintf(f,"img { border:0; } ");
}

void write_head(FILE *f,const char *title,int page_id,int wiki,int expandsdk)
{
	char titlebuf[MAX_PATH];
	
	get_title(titlebuf,title);
	
	fprintf(f,"<!DOCTYPE html>\n");
	if (is_rtl)
	{
		fprintf(f,"<html lang=\"%s\" dir=\"rtl\">\n",*short_lang_code ? short_lang_code : "en");
	}
	else
	{
		fprintf(f,"<html lang=\"%s\">\n",*short_lang_code ? short_lang_code : "en");
	}
	fprintf(f,"<head>\n");
	fprintf(f,"<title>%s</title>\r\n",titlebuf);
	fprintf(f,"<meta name=\"viewport\" content=\"width=%d\">\r\n",wiki?wiki_min_width:minwidth);
	fprintf(f,"<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\r\n");
	fprintf(f,"<link rel=\"alternate\" type=\"application/rss+xml\" title=\"voidtools RSS Feed\" href=\"%s/rss.xml\" />\r\n",url_path_root);
	fprintf(f,"<style type=\"text/css\">");
	style_css(f);
	if (wiki) wiki_css(f,expandsdk);
	faq_css(f);
	fprintf(f,"</style>\r\n");
	fprintf(f,"</head>\r\n");
	fprintf(f,"<body>\r\n");

	fprintf(f,"<div class=\"top\">\r\n");
	fprintf(f,"<div class=\"topcenter\">\r\n");
	fprintf(f,"<a href=\"%s/\"><img alt=\"voidtools\" src=\"%s/voidtools9.png\" /></a>\r\n",url_path_local,url_path_root);
	fprintf(f,"</div>\r\n");
	fprintf(f,"</div>\r\n");

	// menu	
	{	
		int i;
		
		fprintf(f,"<div class=\"menu\">\r\n");
		fprintf(f,"<div class=\"menucenter\">\r\n");

		for(i=0;i<PAGE_COUNT;i++)
		{
			char linkbuf[MAX_PATH];
			get_link(linkbuf,i);
			
			if (i == page_id)
			{
				fprintf(f,"<div class=\"curmenuitem\"><a href=\"%s\">%s</a></div>\r\n",linkbuf,strings[page_name_ids[i]]);
			}
			else
			{
				fprintf(f,"<div class=\"menuitem\"><a href=\"%s\">%s</a></div>\r\n",linkbuf,strings[page_name_ids[i]]);
			}
		}
	
		fprintf(f,"<div class=\"search\">"
			"<form method=\"get\" action=\"https://www.google.com/search\">"
			"<div>"
			"<input class=\"searchedit\" type=\"text\" name=\"q\" size=\"15\" maxlength=\"255\" value=\"\" />"
//			"<input type=\"submit\" value=\"Google Search\" />"
			"<input type=\"hidden\" name=\"sitesearch\" value=\"voidtools.com\" />"
			"</div>"
			"</form>"
			"</div>\r\n");
		
		fprintf(f,"<div class=\"endmenuitem\"></div>\r\n");

		fprintf(f,"</div>\r\n");
		fprintf(f,"</div>\r\n");
	}
	
	if (wiki)
	{
		fprintf(f,"<div class=\"wiki\">\r\n");
		fprintf(f,"<div class=\"wikicenter\">\r\n");
		fprintf(f,"<div class=\"wikipadding\">\r\n");
	}
	else
	{
		fprintf(f,"<div class=\"content\">\r\n");
		fprintf(f,"<div class=\"contentcenter\">\r\n");
		fprintf(f,"<div class=\"contentpadding\">\r\n");
	}
}

void write_footer(FILE *f,int wiki)
{
	char string_buf[MAX_PATH];
	char year_buf[MAX_PATH];
	SYSTEMTIME st;
	
	if (wiki)
	{
		fprintf(f,"</div>\r\n");
		fprintf(f,"</div>\r\n");
		fprintf(f,"</div>\r\n");
	}
	else
	{
		fprintf(f,"</div>\r\n");
		fprintf(f,"</div>\r\n");
		fprintf(f,"</div>\r\n");
	}

/*
	fprintf(f,"<div class=\"bot2\">");
	fprintf(f,"");
	fprintf(f,"</div>");
*/

	fprintf(f,"<div class=\"bot\">\r\n");
	fprintf(f,"<div class=\"botcenter\">\r\n");
	fprintf(f,"<div class=\"botpadding\">\r\n");

	get_template_url(string_buf,STRING_ID_ABOUT_TEMPLATE);
	fprintf(f,"<a href=\"%s\">%s</a>\r\n",string_buf,strings[STRING_ID_ABOUT]);

	get_template_url(string_buf,STRING_ID_LANGUAGE_TEMPLATE);
	fprintf(f,"<a href=\"%s\">%s</a>\r\n",string_buf,strings[STRING_ID_LANGUAGE]);

	fprintf(f,"</div>\r\n");
	fprintf(f,"</div>\r\n");
	fprintf(f,"</div>\r\n");

	
	fprintf(f,"<div class=\"bot2\">\r\n");
	fprintf(f,"<div class=\"botcenter2\">\r\n");

	GetLocalTime(&st);
	sprintf(year_buf,"%d",st.wYear);
	get_string(string_buf,STRING_ID_COPYRIGHT,"{{YEAR}}",year_buf);
	fprintf(f,"%s",string_buf);

	get_template_url(string_buf,STRING_ID_PRIVACY_TEMPLATE);
	fprintf(f,"<a href=\"%s\">%s</a>\r\n",string_buf,strings[STRING_ID_PRIVACY]);

	fprintf(f,"</div>\r\n");
	fprintf(f,"</div>\r\n");

	
	fprintf(f,"</body>\r\n");
	fprintf(f,"</html>\r\n");
}

void utf8_copy_wchar(char *buf,const wchar_t *s1)
{
	WideCharToMultiByte(CP_UTF8,0,s1,-1,buf,MAX_PATH,0,0);	
}

void wchar_copy_utf8(wchar_t *buf,const char *s1)
{
	MultiByteToWideChar(CP_UTF8,0,s1,-1,buf,MAX_PATH);	
}

void wchar_remove_extension(wchar_t *p)
{
	wchar_t *last;
	
	last = 0;
	
	while(*p)
	{
		if (*p == '.')
		{
			last = p;
		}
		
		p++;
	}
	
	if (last)
	{
		*last = 0;
	}
}

void utf8_remove_extension(char *p)
{
	char *last;
	
	last = 0;
	
	while(*p)
	{
		if (*p == '.')
		{
			last = p;
		}
		
		p++;
	}
	
	if (last)
	{
		*last = 0;
	}
}

FILE *begin_page(const char *html_filename,const char *template_filename,int template_id,const char *title,int page)
{
	FILE *f;
	wchar_t buf[MAX_PATH];
	
	if (html_filename)
	{
		wchar_t whtml_filename[MAX_PATH];

		wchar_copy_utf8(whtml_filename,html_filename);
	
		wsprintf(buf,L"%s\\%s",file_path_local,whtml_filename);
		wcscpy(current_folder,L"");

//		printf("writing page %S\n",whtml_filename);
	}
	else
	{
		wchar_t wfolder[MAX_PATH];
		
		wchar_copy_utf8(wfolder,template_filename ? template_filename : strings[template_id]);
		wchar_remove_extension(wfolder);
		
		wsprintf(buf,L"%s\\%s",file_path_local,wfolder);
		CreateDirectory(buf,0);
	
		wsprintf(buf,L"%s\\%s\\index.html",file_path_local,wfolder);

		wcscpy(current_folder,wfolder);

//		printf("writing page %S\\index.html\n",wfolder);
	}
	
	f = _wfopen(buf,L"wb");
	if (!f)
	{
		printf("%S: error: failed to create %s\n",language_subfolder,buf);
		errors++;
	}

	write_head(f,title,page,0,0);
	
	current_page = page;
	
	return f;
}

void end_page(FILE *f,const char *html_filename,const char *template_filename,int template_id)
{
	wchar_t existing_filename[MAX_PATH];
	wchar_t buf[MAX_PATH];
	
	if (html_filename)
	{
		wchar_t whtml_filename[MAX_PATH];

		wchar_copy_utf8(whtml_filename,html_filename);
	
		wsprintf(buf,L"%s\\%s",file_path_local,whtml_filename);
		wcscpy(current_folder,L"");

//		printf("writing page %S\n",whtml_filename);
	}
	else
	{
		wchar_t wfolder[MAX_PATH];
		
		wchar_copy_utf8(wfolder,template_filename ? template_filename : strings[template_id]);
		wchar_remove_extension(wfolder);
		
		wsprintf(buf,L"%s\\%s",file_path_local,wfolder);
//		CreateDirectory(buf,0);
	
		wsprintf(buf,L"%s\\%s\\index.html",file_path_local,wfolder);

		wcscpy(current_folder,wfolder);

//		printf("writing page %S\\index.html\n",wfolder);
	}
		
	write_footer(f,0);
	
	fclose(f);

	{
		HANDLE h;
		
		h = CreateFile(buf,FILE_WRITE_ATTRIBUTES,FILE_SHARE_READ|FILE_SHARE_WRITE|FILE_SHARE_DELETE,0,OPEN_EXISTING,0,0);
		
		if (h != INVALID_HANDLE_VALUE)
		{
			if (SetFileTime(h,0,0,&exe_filetime))
			{
			}
			else
			{
				printf("SetFileTime failed: get last error %d\n",GetLastError());
			}
			
			CloseHandle(h);
		}
		else
		{
			printf("unable to set file filetime\n");
		}
	}
	
	if (*current_folder)
	{
		HANDLE dir;

		wsprintf(existing_filename,L"%s\\%s",file_path_local,current_folder);
		
		dir = CreateFile(existing_filename,FILE_WRITE_ATTRIBUTES ,FILE_SHARE_READ|FILE_SHARE_WRITE,0,OPEN_EXISTING,FILE_FLAG_BACKUP_SEMANTICS,0);
		if (dir != INVALID_HANDLE_VALUE)
		{
			if (!SetFileTime(dir,0,0,&exe_filetime))
			{
				printf("SetFileTime failed: get last error %d\n",GetLastError());
			}
			
			CloseHandle(dir);
		}
	}
}

int get_filesize_kb(const char *filename)
{
	wchar_t buf[MAX_PATH];
	WIN32_FIND_DATA fd;
	HANDLE h;
	int size;
	
	size = 0;
	
	wsprintf(buf,L"%s\\%S",file_path_root,filename);
	
	h = FindFirstFile(buf,&fd);
	
	if (h != INVALID_HANDLE_VALUE)
	{
		size = (fd.nFileSizeLow + 1023) / 1024;
		
		FindClose(h);
	}
	else
	{
		printf("error: couldn't get filesize for: %s\n",filename);
		errors++;
//		MessageBox(0,"couldn't get filesize","makevoidtools",MB_OK|MB_ICONERROR);
	}
	
	return size;
}

void box_dl(FILE *f)
{
	// 1.4.1
	{
		char string_buf[MAX_PATH];

		get_link(string_buf,PAGE_DOWNLOAD);
		known_url_add(string_buf,"dl",1);
		
		get_string(string_buf,STRING_ID_DOWNLOAD_EVERYTHING_HEADER,"{{VERSION}}",EVERYTHING_1_4_1_VERSION);
		fprintf(f,"<h2 id=\"dl\">%s</h2>",string_buf);

		get_string(string_buf,STRING_ID_DOWNLOAD_INSTALLER,0,0);
		fprintf(f,"<a style=\"width:256px;\" class=\"button\" href=\"%s/%s\">%s</a>\r\n",url_path_root,EVERYTHING_1_4_1_X86_INSTALLER,string_buf);
		get_string(string_buf,STRING_ID_DOWNLOAD_INSTALLER_X64,0,0);
		fprintf(f,"<a style=\"width:256px;\" class=\"button\" href=\"%s/%s\">%s</a>\r\n",url_path_root,EVERYTHING_1_4_1_X64_INSTALLER,string_buf);
		fprintf(f,"<div style=\"clear:both\"></div>\r\n");
		get_string(string_buf,STRING_ID_DOWNLOAD_PORTABLE_ZIP,0,0);
		fprintf(f,"<a style=\"width:256px;\" class=\"button\" href=\"%s/%s\">%s</a>\r\n",url_path_root,EVERYTHING_1_4_1_X86_ZIP,string_buf);
		get_string(string_buf,STRING_ID_DOWNLOAD_PORTABLE_ZIP_X64,0,0);
		fprintf(f,"<a style=\"width:256px;\" class=\"button\" href=\"%s/%s\">%s</a>\r\n",url_path_root,EVERYTHING_1_4_1_X64_ZIP,string_buf);
		fprintf(f,"<div style=\"clear:both\"></div>\r\n");

		fprintf(f,"<p>");
		get_string(string_buf,STRING_ID_EVERYTHING_CHANGES,"{{CHANGES}}","/"EVERYTHING_1_4_1_CHANGES);
		fprintf(f,"%s",string_buf);
		fprintf(f,"<span class=\"leftdot\"></span>");
		get_string(string_buf,STRING_ID_EVERYTHING_BETA_WHATS_NEW,0,0);
		fprintf(f,"%s",string_buf);
		fprintf(f,"<span class=\"leftdot\"></span>");
		get_string(string_buf,STRING_ID_EVERYTHING_OLDER_VERSIONS,0,0);
		fprintf(f,"%s",string_buf);
		fprintf(f,"<span class=\"leftdot\"></span>");
		get_string(string_buf,STRING_ID_EVERYTHING_LICENSE,0,0);
		fprintf(f,"%s",string_buf);
		fprintf(f,"<span class=\"leftdot\"></span>");
//		get_string(string_buf,STRING_ID_EVERYTHING_MD5,"{{MD5}}","/"EVERYTHING_1_4_1_MD5);
		get_string(string_buf,STRING_ID_EVERYTHING_SHA256,"{{SHA256}}","/"EVERYTHING_1_4_1_SHA256);
		fprintf(f,"%s",string_buf);
		fprintf(f,"<span class=\"leftdot\"></span>");
		get_string(string_buf,STRING_ID_EVERYTHING_SUPPORTED_LANGUAGES,0,0);
		fprintf(f,"%s",string_buf);
		fprintf(f,"<span class=\"leftdot\"></span>");
		get_string(string_buf,STRING_ID_EVERYTHING_HELP,0,0);
		fprintf(f,"%s",string_buf);
		fprintf(f,"</p>\r\n");

		fprintf(f,"<br/>\r\n");
		fprintf(f,"<br/>\r\n");
		fprintf(f,"<br/>\r\n");
	}
	/*
	// 1.3.4
	{
		char string_buf[MAX_PATH];
		
		get_string(string_buf,STRING_ID_DOWNLOAD_EVERYTHING_HEADER,"{{VERSION}}",EVERYTHING_1_3_4_VERSION);
		fprintf(f,"<h2 id=\"1.3.4\">%s</h2>",string_buf);

		get_string(string_buf,STRING_ID_DOWNLOAD_INSTALLER,0,0);
		fprintf(f,"<a style=\"width:256px;\" class=\"button\" href=\"%s/%s\">%s</a>\r\n",url_path_root,EVERYTHING_1_3_4_X86_MULTILINGUAL_INSTALLER,string_buf);
		get_string(string_buf,STRING_ID_DOWNLOAD_INSTALLER_X64,0,0);
		fprintf(f,"<a style=\"width:256px;\" class=\"button\" href=\"%s/%s\">%s</a>\r\n",url_path_root,EVERYTHING_1_3_4_X64_MULTILINGUAL_INSTALLER,string_buf);
		fprintf(f,"<div style=\"clear:both\"></div>\r\n");

		get_string(string_buf,STRING_ID_DOWNLOAD_PORTABLE_ZIP,0,0);
		fprintf(f,"<a style=\"width:256px;\" class=\"button\" href=\"%s/%s\">%s</a>\r\n",url_path_root,EVERYTHING_1_3_4_X86_MULTILINGUAL_ZIP,string_buf);
		get_string(string_buf,STRING_ID_DOWNLOAD_PORTABLE_ZIP_X64,0,0);
		fprintf(f,"<a style=\"width:256px;\" class=\"button\" href=\"%s/%s\">%s</a>\r\n",url_path_root,EVERYTHING_1_3_4_X64_MULTILINGUAL_ZIP,string_buf);
		fprintf(f,"<div style=\"clear:both\"></div>\r\n");

		fprintf(f,"<p>");
		get_string(string_buf,STRING_ID_EVERYTHING_CHANGES,"{{CHANGES}}","/"EVERYTHING_1_3_4_CHANGES);
		fprintf(f,"%s",string_buf);
		fprintf(f,"<span class=\"leftdot\"></span>");
		get_string(string_buf,STRING_ID_EVERYTHING_OLDER_VERSIONS,0,0);
		fprintf(f,"%s",string_buf);
		fprintf(f,"<span class=\"leftdot\"></span>");
		get_string(string_buf,STRING_ID_EVERYTHING_LICENSE,0,0);
		fprintf(f,"%s",string_buf);
		fprintf(f,"<span class=\"leftdot\"></span>");
		get_string(string_buf,STRING_ID_EVERYTHING_MD5,"{{MD5}}","/"EVERYTHING_1_3_4_MD5);
		fprintf(f,"%s",string_buf);
		fprintf(f,"<span class=\"leftdot\"></span>");
		get_string(string_buf,STRING_ID_EVERYTHING_SUPPORTED_LANGUAGES,0,0);
		fprintf(f,"%s",string_buf);
		fprintf(f,"<span class=\"leftdot\"></span>");
		get_string(string_buf,STRING_ID_EVERYTHING_HELP,0,0);
		fprintf(f,"%s",string_buf);
		fprintf(f,"</p>\r\n");

		fprintf(f,"<br/>\r\n");
	}*/
}

void box_beta(FILE *f)
{
#ifdef EVERYTHING_BETA_VERSION

	char string_buf[MAX_PATH];

	get_link(string_buf,PAGE_DOWNLOAD);
	known_url_add(string_buf,"beta",1);
	
	get_string(string_buf,STRING_ID_DOWNLOAD_EVERYTHING_BETA_HEADER,"{{VERSION}}",EVERYTHING_BETA_VERSION);
	fprintf(f,"<h2 id=\"beta\">%s</h2>",string_buf);

	get_string(string_buf,STRING_ID_DOWNLOAD_INSTALLER,0,0);
	fprintf(f,"<a style=\"width:256px;\" class=\"button\" href=\"%s/%s\">%s</a>\r\n",url_path_root,EVERYTHING_BETA_X86_INSTALLER,string_buf);
	get_string(string_buf,STRING_ID_DOWNLOAD_INSTALLER_X64,0,0);
	fprintf(f,"<a style=\"width:256px;\" class=\"button\" href=\"%s/%s\">%s</a>\r\n",url_path_root,EVERYTHING_BETA_X64_INSTALLER,string_buf);
	fprintf(f,"<div style=\"clear:both\"></div>\r\n");
	get_string(string_buf,STRING_ID_DOWNLOAD_PORTABLE_ZIP,0,0);
	fprintf(f,"<a style=\"width:256px;\" class=\"button\" href=\"%s/%s\">%s</a>\r\n",url_path_root,EVERYTHING_BETA_X86_ZIP,string_buf);
	get_string(string_buf,STRING_ID_DOWNLOAD_PORTABLE_ZIP_X64,0,0);
	fprintf(f,"<a style=\"width:256px;\" class=\"button\" href=\"%s/%s\">%s</a>\r\n",url_path_root,EVERYTHING_BETA_X64_ZIP,string_buf);
	fprintf(f,"<div style=\"clear:both\"></div>\r\n");

	fprintf(f,"<p>");
	get_string(string_buf,STRING_ID_EVERYTHING_CHANGES,"{{CHANGES}}","/"EVERYTHING_BETA_CHANGES);
	fprintf(f,"%s",string_buf);
	fprintf(f,"<span class=\"leftdot\"></span>");
	get_string(string_buf,STRING_ID_EVERYTHING_BETA_WHATS_NEW,0,0);
	fprintf(f,"%s",string_buf);
	fprintf(f,"<span class=\"leftdot\"></span>");
	get_string(string_buf,STRING_ID_EVERYTHING_LICENSE,0,0);
	fprintf(f,"%s",string_buf);
	fprintf(f,"<span class=\"leftdot\"></span>");
	get_string(string_buf,STRING_ID_EVERYTHING_MD5,"{{MD5}}","/"EVERYTHING_BETA_MD5);
//	get_string(string_buf,STRING_ID_EVERYTHING_SHA256,"{{SHA256}}","/"EVERYTHING_BETA_SHA256);
	fprintf(f,"%s",string_buf);
	fprintf(f,"<span class=\"leftdot\"></span>");
	get_string(string_buf,STRING_ID_EVERYTHING_SUPPORTED_LANGUAGES,0,0);
	fprintf(f,"%s",string_buf);
	fprintf(f,"<span class=\"leftdot\"></span>");
	get_string(string_buf,STRING_ID_EVERYTHING_HELP,0,0);
	fprintf(f,"%s",string_buf);
	fprintf(f,"</p>\r\n");

	fprintf(f,"<br/>\r\n");
	
#endif	
}

void box_all_dl(FILE *f)
{
	char string_buf[MAX_PATH];
	char multilingual_buf[MAX_PATH];
	
	get_link(string_buf,PAGE_DOWNLOAD);
	known_url_add(string_buf,"all",1);
	
	get_string(string_buf,STRING_ID_ALL_EVERYTHING_DOWNLOADS_HEADER,0,0);
	get_string(multilingual_buf,STRING_ID_MULTILINGUAL,0,0);
	
	fprintf(f,"<h2 id=\"all\">%s</h2>",string_buf);

	fprintf(f,"<table class=\"dltable\">\r\n");

	// 1.4.1
	
	fprintf(f,"<tr><td><p class=\"de\"><a href=\"%s/%s\">%s</a></p></td><td>%s</td><td>x86</td><td>English (US)</td><td>%d %s</td></tr>\r\n",url_path_root,EVERYTHING_1_4_1_X86_EN_US_INSTALLER,EVERYTHING_1_4_1_X86_EN_US_INSTALLER,strings[STRING_ID_INSTALLER],get_filesize_kb(EVERYTHING_1_4_1_X86_EN_US_INSTALLER),strings[STRING_ID_KB]);
	fprintf(f,"<tr><td><p class=\"de\"><a href=\"%s/%s\">%s</a></p></td><td>%s</td><td>x64</td><td>English (US)</td><td>%d %s</td></tr>\r\n",url_path_root,EVERYTHING_1_4_1_X64_EN_US_INSTALLER,EVERYTHING_1_4_1_X64_EN_US_INSTALLER,strings[STRING_ID_INSTALLER],get_filesize_kb(EVERYTHING_1_4_1_X64_EN_US_INSTALLER),strings[STRING_ID_KB]);
	fprintf(f,"<tr><td><p class=\"de\"><a href=\"%s/%s\">%s</a></p></td><td>%s</td><td>x86</td><td>%s</td><td>%d %s</td></tr>\r\n",url_path_root,EVERYTHING_1_4_1_X86_INSTALLER,EVERYTHING_1_4_1_X86_INSTALLER,strings[STRING_ID_INSTALLER],multilingual_buf,get_filesize_kb(EVERYTHING_1_4_1_X86_INSTALLER),strings[STRING_ID_KB]);
	fprintf(f,"<tr><td><p class=\"de\"><a href=\"%s/%s\">%s</a></p></td><td>%s</td><td>x64</td><td>%s</td><td>%d %s</td></tr>\r\n",url_path_root,EVERYTHING_1_4_1_X64_INSTALLER,EVERYTHING_1_4_1_X64_INSTALLER,strings[STRING_ID_INSTALLER],multilingual_buf,get_filesize_kb(EVERYTHING_1_4_1_X64_INSTALLER),strings[STRING_ID_KB]);

	fprintf(f,"<tr><td><p class=\"de\"><a href=\"%s/%s\">%s</a></p></td><td>%s</td><td>x86</td><td>%s</td><td>%d %s</td></tr>\r\n",url_path_root,EVERYTHING_1_4_1_X86_MSI_INSTALLER,EVERYTHING_1_4_1_X86_MSI_INSTALLER,strings[STRING_ID_INSTALLER],multilingual_buf,get_filesize_kb(EVERYTHING_1_4_1_X86_MSI_INSTALLER),strings[STRING_ID_KB]);
	fprintf(f,"<tr><td><p class=\"de\"><a href=\"%s/%s\">%s</a></p></td><td>%s</td><td>x64</td><td>%s</td><td>%d %s</td></tr>\r\n",url_path_root,EVERYTHING_1_4_1_X64_MSI_INSTALLER,EVERYTHING_1_4_1_X64_MSI_INSTALLER,strings[STRING_ID_INSTALLER],multilingual_buf,get_filesize_kb(EVERYTHING_1_4_1_X64_MSI_INSTALLER),strings[STRING_ID_KB]);

	fprintf(f,"<tr><td><p class=\"de\"><a href=\"%s/%s\">%s</a></p></td><td>%s</td><td>x86</td><td>English (US)</td><td>%d %s</td></tr>\r\n",url_path_root,EVERYTHING_1_4_1_X86_EN_US_ZIP,EVERYTHING_1_4_1_X86_EN_US_ZIP,strings[STRING_ID_PORTABLE],get_filesize_kb(EVERYTHING_1_4_1_X86_EN_US_ZIP),strings[STRING_ID_KB]);
	fprintf(f,"<tr><td><p class=\"de\"><a href=\"%s/%s\">%s</a></p></td><td>%s</td><td>x64</td><td>English (US)</td><td>%d %s</td></tr>\r\n",url_path_root,EVERYTHING_1_4_1_X64_EN_US_ZIP,EVERYTHING_1_4_1_X64_EN_US_ZIP,strings[STRING_ID_PORTABLE],get_filesize_kb(EVERYTHING_1_4_1_X64_EN_US_ZIP),strings[STRING_ID_KB]);
	fprintf(f,"<tr><td><p class=\"de\"><a href=\"%s/%s\">%s</a></p></td><td>%s</td><td>ARM</td><td>English (US)</td><td>%d %s</td></tr>\r\n",url_path_root,EVERYTHING_1_4_1_ARM_EN_US_ZIP,EVERYTHING_1_4_1_ARM_EN_US_ZIP,strings[STRING_ID_PORTABLE],get_filesize_kb(EVERYTHING_1_4_1_ARM_EN_US_ZIP),strings[STRING_ID_KB]);
	fprintf(f,"<tr><td><p class=\"de\"><a href=\"%s/%s\">%s</a></p></td><td>%s</td><td>x86</td><td>%s</td><td>%d %s</td></tr>\r\n",url_path_root,EVERYTHING_1_4_1_X86_ZIP,EVERYTHING_1_4_1_X86_ZIP,strings[STRING_ID_PORTABLE],multilingual_buf,get_filesize_kb(EVERYTHING_1_4_1_X86_ZIP),strings[STRING_ID_KB]);
	fprintf(f,"<tr><td><p class=\"de\"><a href=\"%s/%s\">%s</a></p></td><td>%s</td><td>x64</td><td>%s</td><td>%d %s</td></tr>\r\n",url_path_root,EVERYTHING_1_4_1_X64_ZIP,EVERYTHING_1_4_1_X64_ZIP,strings[STRING_ID_PORTABLE],multilingual_buf,get_filesize_kb(EVERYTHING_1_4_1_X64_ZIP),strings[STRING_ID_KB]);
	fprintf(f,"<tr><td><p class=\"de\"><a href=\"%s/%s\">%s</a></p></td><td>%s</td><td>ARM</td><td>%s</td><td>%d %s</td></tr>\r\n",url_path_root,EVERYTHING_1_4_1_ARM_ZIP,EVERYTHING_1_4_1_ARM_ZIP,strings[STRING_ID_PORTABLE],multilingual_buf,get_filesize_kb(EVERYTHING_1_4_1_ARM_ZIP),strings[STRING_ID_KB]);

	// 1.3.4
/*
	fprintf(f,"<tr><td><p class=\"de134\"><a href=\"%s/%s\">%s</a></p></td><td>%s</td><td>x86</td><td>English (US)</td><td>%d %s</td></tr>\r\n",url_path_root,EVERYTHING_1_3_4_X86_INSTALLER,EVERYTHING_1_3_4_X86_INSTALLER,strings[STRING_ID_INSTALLER],get_filesize_kb(EVERYTHING_1_3_4_X86_INSTALLER),strings[STRING_ID_KB]);
	fprintf(f,"<tr><td><p class=\"de134\"><a href=\"%s/%s\">%s</a></p></td><td>%s</td><td>x64</td><td>English (US)</td><td>%d %s</td></tr>\r\n",url_path_root,EVERYTHING_1_3_4_X64_INSTALLER,EVERYTHING_1_3_4_X64_INSTALLER,strings[STRING_ID_INSTALLER],get_filesize_kb(EVERYTHING_1_3_4_X64_INSTALLER),strings[STRING_ID_KB]);
	fprintf(f,"<tr><td><p class=\"de134\"><a href=\"%s/%s\">%s</a></p></td><td>%s</td><td>x86</td><td>%s</td><td>%d %s</td></tr>\r\n",url_path_root,EVERYTHING_1_3_4_X86_MULTILINGUAL_INSTALLER,EVERYTHING_1_3_4_X86_MULTILINGUAL_INSTALLER,strings[STRING_ID_INSTALLER],multilingual_buf,get_filesize_kb(EVERYTHING_1_3_4_X86_MULTILINGUAL_INSTALLER),strings[STRING_ID_KB]);
	fprintf(f,"<tr><td><p class=\"de134\"><a href=\"%s/%s\">%s</a></p></td><td>%s</td><td>x64</td><td>%s</td><td>%d %s</td></tr>\r\n",url_path_root,EVERYTHING_1_3_4_X64_MULTILINGUAL_INSTALLER,EVERYTHING_1_3_4_X64_MULTILINGUAL_INSTALLER,strings[STRING_ID_INSTALLER],multilingual_buf,get_filesize_kb(EVERYTHING_1_3_4_X64_MULTILINGUAL_INSTALLER),strings[STRING_ID_KB]);
	
	fprintf(f,"<tr><td><p class=\"de134\"><a href=\"%s/%s\">%s</a></p></td><td>%s</td><td>x86</td><td>English (US)</td><td>%d %s</td></tr>\r\n",url_path_root,EVERYTHING_1_3_4_X86_ZIP,EVERYTHING_1_3_4_X86_ZIP,strings[STRING_ID_PORTABLE],get_filesize_kb(EVERYTHING_1_3_4_X86_ZIP),strings[STRING_ID_KB]);
	fprintf(f,"<tr><td><p class=\"de134\"><a href=\"%s/%s\">%s</a></p></td><td>%s</td><td>x64</td><td>English (US)</td><td>%d %s</td></tr>\r\n",url_path_root,EVERYTHING_1_3_4_X64_ZIP,EVERYTHING_1_3_4_X64_ZIP,strings[STRING_ID_PORTABLE],get_filesize_kb(EVERYTHING_1_3_4_X64_ZIP),strings[STRING_ID_KB]);
	fprintf(f,"<tr><td><p class=\"de134\"><a href=\"%s/%s\">%s</a></p></td><td>%s</td><td>x86</td><td>%s</td><td>%d %s</td></tr>\r\n",url_path_root,EVERYTHING_1_3_4_X86_MULTILINGUAL_ZIP,EVERYTHING_1_3_4_X86_MULTILINGUAL_ZIP,strings[STRING_ID_PORTABLE],multilingual_buf,get_filesize_kb(EVERYTHING_1_3_4_X86_MULTILINGUAL_ZIP),strings[STRING_ID_KB]);
	fprintf(f,"<tr><td><p class=\"de134\"><a href=\"%s/%s\">%s</a></p></td><td>%s</td><td>x64</td><td>%s</td><td>%d %s</td></tr>\r\n",url_path_root,EVERYTHING_1_3_4_X64_MULTILINGUAL_ZIP,EVERYTHING_1_3_4_X64_MULTILINGUAL_ZIP,strings[STRING_ID_PORTABLE],multilingual_buf,get_filesize_kb(EVERYTHING_1_3_4_X64_MULTILINGUAL_ZIP),strings[STRING_ID_KB]);
*/
#ifdef EVERYTHING_BETA_VERSION

	fprintf(f,"<tr><td><p class=\"de\"><a href=\"%s/%s\">%s</a></p></td><td>%s</td><td>x86</td><td>English (US)</td><td>%d %s</td></tr>\r\n",url_path_root,EVERYTHING_BETA_X86_EN_US_INSTALLER,EVERYTHING_BETA_X86_EN_US_INSTALLER,strings[STRING_ID_INSTALLER],get_filesize_kb(EVERYTHING_BETA_X86_EN_US_INSTALLER),strings[STRING_ID_KB]);
	fprintf(f,"<tr><td><p class=\"de\"><a href=\"%s/%s\">%s</a></p></td><td>%s</td><td>x64</td><td>English (US)</td><td>%d %s</td></tr>\r\n",url_path_root,EVERYTHING_BETA_X64_EN_US_INSTALLER,EVERYTHING_BETA_X64_EN_US_INSTALLER,strings[STRING_ID_INSTALLER],get_filesize_kb(EVERYTHING_BETA_X64_EN_US_INSTALLER),strings[STRING_ID_KB]);
	fprintf(f,"<tr><td><p class=\"de\"><a href=\"%s/%s\">%s</a></p></td><td>%s</td><td>x86</td><td>%s</td><td>%d %s</td></tr>\r\n",url_path_root,EVERYTHING_BETA_X86_INSTALLER,EVERYTHING_BETA_X86_INSTALLER,strings[STRING_ID_INSTALLER],multilingual_buf,get_filesize_kb(EVERYTHING_BETA_X86_INSTALLER),strings[STRING_ID_KB]);
	fprintf(f,"<tr><td><p class=\"de\"><a href=\"%s/%s\">%s</a></p></td><td>%s</td><td>x64</td><td>%s</td><td>%d %s</td></tr>\r\n",url_path_root,EVERYTHING_BETA_X64_INSTALLER,EVERYTHING_BETA_X64_INSTALLER,strings[STRING_ID_INSTALLER],multilingual_buf,get_filesize_kb(EVERYTHING_BETA_X64_INSTALLER),strings[STRING_ID_KB]);

	fprintf(f,"<tr><td><p class=\"de\"><a href=\"%s/%s\">%s</a></p></td><td>%s</td><td>x86</td><td>%s</td><td>%d %s</td></tr>\r\n",url_path_root,EVERYTHING_BETA_X86_MSI_INSTALLER,EVERYTHING_BETA_X86_MSI_INSTALLER,strings[STRING_ID_INSTALLER],multilingual_buf,get_filesize_kb(EVERYTHING_BETA_X86_MSI_INSTALLER),strings[STRING_ID_KB]);
	fprintf(f,"<tr><td><p class=\"de\"><a href=\"%s/%s\">%s</a></p></td><td>%s</td><td>x64</td><td>%s</td><td>%d %s</td></tr>\r\n",url_path_root,EVERYTHING_BETA_X64_MSI_INSTALLER,EVERYTHING_BETA_X64_MSI_INSTALLER,strings[STRING_ID_INSTALLER],multilingual_buf,get_filesize_kb(EVERYTHING_BETA_X64_MSI_INSTALLER),strings[STRING_ID_KB]);

	fprintf(f,"<tr><td><p class=\"de\"><a href=\"%s/%s\">%s</a></p></td><td>%s</td><td>x86</td><td>English (US)</td><td>%d %s</td></tr>\r\n",url_path_root,EVERYTHING_BETA_X86_EN_US_ZIP,EVERYTHING_BETA_X86_EN_US_ZIP,strings[STRING_ID_PORTABLE],get_filesize_kb(EVERYTHING_BETA_X86_EN_US_ZIP),strings[STRING_ID_KB]);
	fprintf(f,"<tr><td><p class=\"de\"><a href=\"%s/%s\">%s</a></p></td><td>%s</td><td>x64</td><td>English (US)</td><td>%d %s</td></tr>\r\n",url_path_root,EVERYTHING_BETA_X64_EN_US_ZIP,EVERYTHING_BETA_X64_EN_US_ZIP,strings[STRING_ID_PORTABLE],get_filesize_kb(EVERYTHING_BETA_X64_EN_US_ZIP),strings[STRING_ID_KB]);
	fprintf(f,"<tr><td><p class=\"de\"><a href=\"%s/%s\">%s</a></p></td><td>%s</td><td>x86</td><td>%s</td><td>%d %s</td></tr>\r\n",url_path_root,EVERYTHING_BETA_X86_ZIP,EVERYTHING_BETA_X86_ZIP,strings[STRING_ID_PORTABLE],multilingual_buf,get_filesize_kb(EVERYTHING_BETA_X86_ZIP),strings[STRING_ID_KB]);
	fprintf(f,"<tr><td><p class=\"de\"><a href=\"%s/%s\">%s</a></p></td><td>%s</td><td>x64</td><td>%s</td><td>%d %s</td></tr>\r\n",url_path_root,EVERYTHING_BETA_X64_ZIP,EVERYTHING_BETA_X64_ZIP,strings[STRING_ID_PORTABLE],multilingual_buf,get_filesize_kb(EVERYTHING_BETA_X64_ZIP),strings[STRING_ID_KB]);

#endif

	fprintf(f,"</table>\r\n");

	fprintf(f,"<br/>\r\n");

}

void box_language(FILE *f)
{
	char string_buf[MAX_PATH];
	
	get_link(string_buf,PAGE_DOWNLOAD);
	known_url_add(string_buf,"language",1);

	get_string(string_buf,STRING_ID_DOWNLOAD_EVERYTHING_LANGUAGE_PACK_HEADER,0,0);
	fprintf(f,"<h2 id=\"language\">%s</h2>",string_buf);

	fprintf(f,"<table class=\"dltable\">\r\n");
	fprintf(f,"<tr><td><p class=\"dc\"><a href=\"%s/Everything.lng.zip\">Everything.lng.zip</a></p></td><td>%d %s</td></tr>\r\n",url_path_root,get_filesize_kb("Everything.lng.zip"),strings[STRING_ID_KB]);

	fprintf(f,"<tr>");
	fprintf(f,"<td colspan=\"2\">");
	fprintf(f,"<p>");
	
	get_string(string_buf,STRING_ID_EVERYTHING_SUPPORTED_LANGUAGES,0,0);
	fprintf(f,"%s",string_buf);
	fprintf(f,"<span class=\"leftdot\"></span>");
	get_string(string_buf,STRING_ID_EVERYTHING_LANGUAGE_PACK_HELP,0,0);
	fprintf(f,"%s",string_buf);
	fprintf(f,"</p></td></tr>\r\n");
	fprintf(f,"</table>\r\n");
}

void box_sdk(FILE *f)
{
	char string_buf[MAX_PATH];

	get_link(string_buf,PAGE_DOWNLOAD);
	known_url_add(string_buf,"sdk",1);
	
	get_string(string_buf,STRING_ID_DOWNLOAD_EVERYTHING_SDK_HEADER,0,0);
	fprintf(f,"<h2 id=\"sdk\">%s</h2>",string_buf);
	
	fprintf(f,"<table class=\"dltable\">\r\n");
	fprintf(f,"<tr><td><p class=\"di\"><a href=\"%s/Everything-SDK.zip\">Everything-SDK.zip</a> </p></td><td>%d %s</td></tr>\r\n",url_path_root,get_filesize_kb("Everything-SDK.zip"),strings[STRING_ID_KB]);

	fprintf(f,"<tr>");
	fprintf(f,"<td colspan=\"2\">");
	fprintf(f,"<p>");
	get_string(string_buf,STRING_ID_EVERYTHING_SDK_HELP,0,0);
	fprintf(f,"%s",string_buf);
	fprintf(f,"</p></td></tr>\r\n");
	fprintf(f,"</table>\r\n");
}

void box_offline_help(FILE *f)
{
	char string_buf[MAX_PATH];
	
	get_link(string_buf,PAGE_DOWNLOAD);
	known_url_add(string_buf,"chm",1);
	
	get_string(string_buf,STRING_ID_DOWNLOAD_EVERYTHING_OFFLINE_HELP,0,0);
	fprintf(f,"<h2 id=\"chm\">%s</h2>",string_buf);
	
	fprintf(f,"<table class=\"dltable\">\r\n");
	fprintf(f,"<tr><td><p class=\"dc\"><a href=\"%s/Everything.chm.zip\">Everything.chm.zip</a></p></td><td>%d %s</td></tr>\r\n",url_path_root,get_filesize_kb("Everything.chm.zip"),strings[STRING_ID_KB]);

	fprintf(f,"</table>\r\n");
}

void box_cli(FILE *f)
{
	char string_buf[MAX_PATH];

	get_link(string_buf,PAGE_DOWNLOAD);
	known_url_add(string_buf,"cli",1);

	get_string(string_buf,STRING_ID_DOWNLOAD_EVERYTHING_COMMAND_LINE_INTERFACE_HEADER,0,0);
	fprintf(f,"<h2 id=\"cli\">%s</h2>",string_buf);

	fprintf(f,"<table class=\"dltable\">\r\n");

	fprintf(f,"<tr><td><p class=\"cli\"><a href=\"%s/"ES_ZIP"\">"ES_ZIP"</a> </p></td><td>%d %s</td></tr>\r\n",url_path_root,get_filesize_kb(ES_ZIP),strings[STRING_ID_KB]);

	fprintf(f,"<tr>");
	fprintf(f,"<td colspan=\"2\">");
	fprintf(f,"<p>");
	get_string(string_buf,STRING_ID_EVERYTHING_COMMAND_LINE_INTERFACE_HELP,0,0);
	fprintf(f,"%s",string_buf);
	fprintf(f,"</p></td></tr>\r\n");
	fprintf(f,"</table>\r\n");
}

void write_language(language_t *language,char *file_sub_path,char *url_sub_path)
{
	wchar_t file_path_local_wbuf[MAX_PATH];
	
//	printf("writing language %s %s%s\n",language->name,url_path_root,url_sub_path);
	
	strings = language->strings;
	is_rtl = language->is_rtl;
	minwidth = 720;
	wiki_min_width = 920;
	wiki_nav_width = 224;
	
	if (stricmp(language->code,"ru-ru") == 0)
	{
		minwidth = 800;
		wiki_min_width = 1000;
		wiki_nav_width = 304;
	}

	wchar_copy_utf8(language_subfolder,language->code);

	wchar_copy_utf8(file_path_local_wbuf,file_sub_path);
	wsprintf(file_path_local,L"%s%s",file_path_root,file_path_local_wbuf);
	CreateDirectory(file_path_local,0);

	sprintf(url_path_local,"%s%s",url_path_root,url_sub_path);

	// get wiki files.	
	resource_clear();
	wiki_clear();
	
	{
		wchar_t path_wbuf[MAX_PATH];
		char wiki_path_buf[MAX_PATH];
		
		sprintf(wiki_path_buf,"%s\\%s",language->code,strings[STRING_ID_SUPPORT_FOLDER]);
				
		wchar_copy_utf8(path_wbuf,wiki_path_buf);
		
		wiki_scan(path_wbuf,L"",0,0);	
	}
	

	write_template("index.html",0,STRING_ID_HOME_TEMPLATE,0,PAGE_HOME);

	// Downloads
	write_template(0,0,STRING_ID_DOWNLOADS_TEMPLATE,strings[STRING_ID_DOWNLOADS],PAGE_DOWNLOAD);
	
	// FAQ

	write_template(0,0,STRING_ID_FAQ_TEMPLATE,strings[STRING_ID_FAQ],PAGE_FAQ);
	
	// contact

	write_template(0,0,STRING_ID_CONTACT_TEMPLATE,strings[STRING_ID_CONTACT],PAGE_CONTACT);	

	write_template(0,0,STRING_ID_ABOUT_TEMPLATE,strings[STRING_ID_ABOUT],INVALID_PAGE);	

	write_template(0,0,STRING_ID_DONATE_TEMPLATE,strings[STRING_ID_DONATE],PAGE_DONATE);	

	write_template(0,0,STRING_ID_ERROR404_TEMPLATE,strings[STRING_ID_ERROR404],INVALID_PAGE);	
	
	write_template(0,0,STRING_ID_LANGUAGE_TEMPLATE,strings[STRING_ID_LANGUAGE],INVALID_PAGE);	
		
	write_template(0,0,STRING_ID_DONATED_TEMPLATE,strings[STRING_ID_DONATED],INVALID_PAGE);	
		
	write_template(0,0,STRING_ID_CONTACTOK_TEMPLATE,strings[STRING_ID_CONTACTOK],INVALID_PAGE);	
		
	write_template(0,0,STRING_ID_CONTACTERROR_TEMPLATE,strings[STRING_ID_CONTACTERROR],INVALID_PAGE);	
	
	write_template(0,0,STRING_ID_UPDATE_TEMPLATE,strings[STRING_ID_UPDATE],INVALID_PAGE);	
	
	write_template(0,0,STRING_ID_PRIVACY_TEMPLATE,strings[STRING_ID_PRIVACY],INVALID_PAGE);	

	write_template(0,0,STRING_ID_MAINTENANCE_TEMPLATE,strings[STRING_ID_MAINTENANCE],INVALID_PAGE);	

// English only
//	write_template(0,"checksum.txt",0,"File Hash Information",INVALID_PAGE);	

	{
		char wiki_path_buf[MAX_PATH];
		
		sprintf(wiki_path_buf,"%s\\%s",language->code,strings[STRING_ID_SUPPORT_FOLDER]);
		
		wiki(wiki_path_buf);
	}
	
	// build sendemail.php
	{
		FILE *o;
		wchar_t sendemail_filename[MAX_PATH];
		char contacterror_url[MAX_PATH];
		char contactok_url[MAX_PATH];
		
		strcpy(contacterror_url,strings[STRING_ID_CONTACTERROR_TEMPLATE]);
		utf8_remove_extension(contacterror_url);
		
		strcpy(contactok_url,strings[STRING_ID_CONTACTOK_TEMPLATE]);
		utf8_remove_extension(contactok_url);
		
		wsprintf(sendemail_filename,L"%s\\sendemail.php",file_path_local);
		
		o = _wfopen(sendemail_filename,L"wb");
		if (o)
		{
			fprintf(o,"<?php\r\n");
			fprintf(o,"\t$email = $_REQUEST['email'] ;\r\n");
			fprintf(o,"\t$message = $_REQUEST['message'] ;\r\n");
			fprintf(o,"\t\r\n");
			fprintf(o,"\tif (($email) || ($message))\r\n");
			fprintf(o,"\t{\r\n");
			fprintf(o,"\t\tif (!$email)\r\n");
			fprintf(o,"\t\t{\r\n");
			fprintf(o,"\t\t\t$email = \"noreply@voidtools.com\";\r\n");
			fprintf(o,"\t\t}\r\n");
			fprintf(o,"\t\r\n");
			fprintf(o,"\t\tif (!$message)\r\n");
			fprintf(o,"\t\t{\r\n");
			fprintf(o,"\t\t\t$message = \"\";\r\n");
			fprintf(o,"\t\t}\r\n");
			fprintf(o,"\t\r\n");
			fprintf(o,"\t\tif (strlen($email) == 0)\r\n");
			fprintf(o,"\t\t{\r\n");
			fprintf(o,"\t\t\t$email = \"noreply@voidtools.com\";\r\n");
			fprintf(o,"\t\t}\r\n");
			fprintf(o,"\t\r\n");
			fprintf(o,"\t\tif (filter_var($email, FILTER_SANITIZE_EMAIL))\r\n");
			fprintf(o,"\t\t{\r\n");
			fprintf(o,"\t\t\tif (eregi(\"(\\r|\\n)\", $from)) \r\n");
			fprintf(o,"\t\t\t{\r\n");
			fprintf(o,"\t\t\t\theader( \"Location: %s/%s\" );\r\n",url_path_local,contacterror_url);
			fprintf(o,"\t\t\t}\r\n");
			fprintf(o,"\t\t\telse\r\n");
			fprintf(o,"\t\t\tif (mail( \"david@voidtools.com\", \"voidtools - Contact form\",  \"From: \" . $email . \"\\n\" . $message)) \r\n");
			fprintf(o,"\t\t\t{\r\n");
			fprintf(o,"\t\t\t\theader( \"Location: %s/%s\" );\r\n",url_path_local,contactok_url);
			fprintf(o,"\t\t\t} \r\n");
			fprintf(o,"\t\t\telse\r\n");
			fprintf(o,"\t\t\t{\r\n");
			fprintf(o,"\t\t\t\theader( \"Location: %s/%s\" );\r\n",url_path_local,contacterror_url);
			fprintf(o,"\t\t\t}\r\n");
			fprintf(o,"\t\t}\r\n");
			fprintf(o,"\t\telse\r\n");
			fprintf(o,"\t\t{\r\n");
			fprintf(o,"\t\t\theader( \"Location: %s/%s\" );\r\n",url_path_local,contacterror_url);
			fprintf(o,"\t\t}\r\n");
			fprintf(o,"\t}\r\n");
			fprintf(o,"\telse\r\n");
			fprintf(o,"\t{\r\n");
			fprintf(o,"\t\theader( \"Location: %s/%s\" );\r\n",url_path_local,contacterror_url);
			fprintf(o,"\t}\r\n");
			fprintf(o,"?>\r\n");
		
			fclose(o);
			

			{
				HANDLE h;
				
				h = CreateFile(sendemail_filename,FILE_WRITE_ATTRIBUTES,FILE_SHARE_READ|FILE_SHARE_WRITE|FILE_SHARE_DELETE,0,OPEN_EXISTING,0,0);
				
				if (h != INVALID_HANDLE_VALUE)
				{
					SetFileTime(h,0,0,&exe_filetime);
					
					CloseHandle(h);
				}
				else
				{
					printf("unable to set file filetime\n");
				}
			}		
		}
	}

	
	// copy images and license etc.
	{
		resource_t *resource;

		resource = resource_start;

		while(resource)
		{
			copy_local_file(resource->name);
		
			resource = resource->next;
		}
	}
	

//	copy_local_file(strings[STRING_ID_DONATE_FORM_BUTTON_IMAGE]);
//	copy_local_file();
}

// main
int main(int _argc,char **_argv)
{
	int argc;
	wchar_t **argv;
	
	{
		wchar_t exe_filename[MAX_PATH];
		HANDLE h;
		
		GetModuleFileName(NULL,exe_filename,MAX_PATH);
		
		h = CreateFile(exe_filename,GENERIC_READ,FILE_SHARE_READ|FILE_SHARE_WRITE|FILE_SHARE_DELETE,0,OPEN_EXISTING,0,0);
		
		if (h != INVALID_HANDLE_VALUE)
		{
			if (GetFileTime(h,0,0,&exe_filetime))
			{
			}
			else
			{
				printf("unable to get exe date\n");

				return 3;
			}
			
			CloseHandle(h);
		}
		else
		{
			printf("unable to get exe date\n");
			
			return 2;
		}
	}
	
	printf("makevoidtools (C) David Carpenter 2018\n");
	
	argv = CommandLineToArgvW(GetCommandLineW(),&argc);
	argc--;
	
	if (argc != 2)
	{
		printf("\n");
		printf("usage:\n");
		printf("makevoidtools.exe <output folder> <url root>\n");
		printf("\n");
		printf("example:\n");
		printf("makevoidtools.exe c:\\dev\\everything\\voidtools file://c:/dev/everything/voidtools\n");
		
		return 1;
	}

	wcscpy(file_path_root,argv[1]);
	
	if (!CreateDirectory(file_path_root,0))
	{
		if (GetLastError() != ERROR_ALREADY_EXISTS)
		{
			printf("Unable to created output folder\n");
			
			return 1;
		}
	}

	utf8_copy_wchar(url_path_root,argv[2]);
	
	known_url_add("/everything/version.ini",0,0);
	known_url_add("/forum",0,1);

	language_scan();
	
	{
		language_t *l;
		
		l = language_start;
		while(l)
		{
			char file_path_buf[MAX_PATH];
			char url_path_buf[MAX_PATH];
			
			sprintf(file_path_buf,"\\%s",l->code);
			sprintf(url_path_buf,"/%s",l->code);
			
			strcpy(language_code,l->code);
			strcpy(short_lang_code,l->code);
			
			{
				char *p;
				
				p = short_lang_code;
				while(*p)
				{
					if (*p == '-')
					{
						*p = 0;
						break;
					}
					p++;
				}
			}
			
			write_language(l,file_path_buf,url_path_buf);
		
			l = l->next;
		}

		strcpy(language_code,"");
		strcpy(short_lang_code,"");
		
		// default.		
		l = language_find("en-us");
		if (!l)
		{
			l = language_start;
		}
		
		if (l)
		{
			write_language(l,"","");
		}
	}

	// check urls.
	{
		url_t *url;
		
		url = url_start;
		while(url)
		{
			if (!find_known_url(url->url))
			{
				printf("%S:%d: warning: broken url %s\n",wchar_file_part(url->filename),url->line,url->url);
				warnings++;
			}
		
			url = url->next;
		}
	}
	
	printf("%d error(s), %d warning(s)\n",errors,warnings);
	
	return 0;
}

typedef struct wiki_s
{
	char *name;
	char *hashref_fixed_name;
	char *link;
	char *subpath;
	struct wiki_s *next;
	struct wiki_s *parent;
	int depth;
	int hidden;
	char *title;
	
}wiki_t;

wiki_t *wiki_start = 0;
wiki_t *wiki_last = 0;

void hashref(char *buf,char *s,int got_hash)
{
	char *d;
	
	d = buf;
	
	while(*s)
	{
		// I with accent.
		if ((*(unsigned char *)s == 0xC3) && (((unsigned char *)s)[1] == 0x8d))
		{	
			*(unsigned char *)d++ = 0xC3;
			*(unsigned char *)d++ = 0xAD;
			
			s++;
		}
		else
		if (*s < 0)
		{
			*d++ = *s;
		}
		else
		if ((*s >= 'A') && (*s <= 'Z'))
		{
			*d++ = *s - 'A' + 'a';
		}
		else
		if ((*s >= 'a') && (*s <= 'z'))
		{
			*d++ = *s;
		}
		else
		if ((*s >= '0') && (*s <= '9'))
		{
			*d++ = *s;
		}
		else
		if ((*s == '#') && (!got_hash))
		{
			got_hash = 1;
			*d++ = *s;
		}
		else
		if (*s == '-')
		{
			*d++ = *s;
		}
		else
		if (*s == '\'')
		{
			// ignore the ' in what's
		}
		else
		if (*s == '_')
		{
			*d++ = *s;
		}
		else
		if ((*s == '\\') && (!got_hash))
		{
			*d++ = '/';
		}
		else
		if ((*s == '/') && (!got_hash))
		{
			*d++ = '/';
		}
		else
		{
			if ((d > buf) && (d[-1] != '_')&& (d[-1] != '#'))
			{
				*d++ = '_';
			}
		}
		
		s++;
	}
	
	if (d > buf)
	{
		if (d[-1] == '_')
		{
			d[-1] = 0;
		}
	}
	
	*d = 0;
}

void wiki_trimnumprefix(char *s)
{
	char *d;
	char *p;
	
	d = s;
	p = s;
	
	while(*p)
	{
		if (!((*p >= '0') && (*p <= '9')))
		{
			if (*p != '-')
			{
				if (*p != '_')
				{
					break;
				}
			}
		}
		
		p++;
	}

	while(*p)
	{
		*d++ = *p;
		
		p++;
	}
	
	*d = 0;
}

static void wiki_clear(void)
{
	wiki_start = 0;
	wiki_last = 0;
}

wiki_t *wiki_add(char *subpath,char *filename,int depth,wiki_t *parent,const char *title)
{
	wiki_t *w;
	char buf[65536];
	char filename_nonum[65536];
	char buf_nonum[65536];
	char hashref_fixed_name_buf[MAX_PATH];
	
	strcpy(filename_nonum,filename);
	wiki_trimnumprefix(filename_nonum);
	
	w = (wiki_t *)malloc(sizeof(wiki_t));
	
	w->name = stralloc(filename_nonum);
	w->title = stralloc(title);

	hashref(hashref_fixed_name_buf,filename_nonum,0);
	w->hashref_fixed_name = stralloc(hashref_fixed_name_buf);

	w->hidden = filename[0] == '_';
	
	if (*subpath)
	{
		sprintf(buf,"%s\\%s",subpath,filename);
		sprintf(buf_nonum,"%s\\%s",subpath,filename_nonum);
	}
	else
	{
		sprintf(buf,"%s",filename);
		sprintf(buf_nonum,"%s",filename_nonum);
	}
	
	w->subpath = stralloc(buf);

	w->link = stralloc(buf_nonum);
	hashref(w->link,buf_nonum,0);
	
	w->parent = parent;
	w->depth = depth;
	
	if (wiki_start)
	{
		wiki_last->next = w;
	}
	else
	{
		wiki_start = w;
	}
	
	wiki_last = w;
	w->next = 0;
	
	return w;
}

char *cat_escape_html(char *d,const char *s)
{
	while(*s)
	{
		if (*s == '<')
		{
			*d++ = '&';
			*d++ = 'l';
			*d++ = 't';
			*d++ = ';';
			s++;
		}
		else
		if (*s == '>')
		{
			*d++ = '&';
			*d++ = 'g';
			*d++ = 't';
			*d++ = ';';
			s++;
		}
		else
		if (*s == '&')
		{
			*d++ = '&';
			*d++ = 'a';
			*d++ = 'm';
			*d++ = 'p';
			*d++ = ';';
			s++;
		}
		else
		{
			*d++ = *s;
			s++;
		}
	}
	
	return d;
}

char *cat(char *d,const char *s)
{
	while(*s)
	{
		*d++ = *s;
		
		s++;
	}
	
	return d;
}

char *catlen(char *d,char *s,int len)
{
	while(len--)
	{
		*d++ = *s;
		
		s++;
	}
	
	return d;
}

static int ispstart(char *p)
{
	if (*p == '*') return 0;
	if (*p == '{') return 0;
	if (*p == '|') return 0;
	if (*p == '=') return 0;
	if (*p == '_') return 0;
	if (*p == '!') return 0;
	if (!*p) return 0;
	
	return 1;
}

static int check(char **pp,char *s)
{
	char *p;
	
	p = *pp;
	
	while(*s)
	{
		if (*s != *p) 
		{
			return 0;
		}
		
		p++;
		s++;
	}
	
	*pp = p;
	return 1;
}

static wiki_t *wiki_fix_name(char *buf,char *name,wiki_t *current_w)
{
	wiki_t *w;
	char namepart[65536];
	char link[65536];
	char *d;
	char *p;
	char *hash;
	
	d = namepart;
	p = name;
	hash = 0;
	
	while(*p)
	{
		if (*p == '#') 
		{
			p++;
			hash = p;
			break;
		}
		
		*d++=*p;
		p++;
	}
	*d = 0;
	
	w = wiki_start;
	
	hashref(link,namepart,0);
	
	if (!*link)
	{
		w = current_w;
		
		goto gotw;
	}
	
	while(w)
	{
		if (stricmp(w->link,link) == 0)
		{
gotw:		
			d = buf;
			p = w->link;

			while(*p)
			{
				*d++ = *p;
				p++;
			}

			*d++ = '/';
			*d = 0;
			
			if (hash)
			{
				*d++ = '#';
				hashref(d,hash,1);
			}

			return w;
		}
		
		w = w->next;
	}
	
	*buf = 0;

	if (!strchr(name,':'))
	{
//		printf("Unknown wiki link %s\n",name);
	}
	
	return 0;
}

typedef struct findfile_s
{
	struct findfile_s *next;
	char *wiki_title;
	WIN32_FIND_DATA fd;
	
}findfile_t;

void findfile_clear(findfile_t *start)
{
	findfile_t *ff;
	
	ff = start;
	while(ff)
	{
		findfile_t *next_ff;
		
		next_ff = ff->next;
		
		free(ff);
		
		ff = next_ff;
	}
}

findfile_t *findfile_add(findfile_t **start,findfile_t **last,const WIN32_FIND_DATA *fd,const char *wiki_title)
{
	findfile_t *ff;
	
	ff = malloc(sizeof(findfile_t));
	
	memcpy(&ff->fd,fd,sizeof(WIN32_FIND_DATA));
	ff->wiki_title = stralloc(wiki_title);
	
	if (*start)
	{
		(*last)->next = ff;
	}
	else
	{
		*start = ff;
	}
	
	ff->next = 0;
	*last = ff;
	
	return ff;
}

static int __cdecl findfile_compare(const findfile_t **a,const findfile_t **b)
{
	wchar_t awbuf[MAX_PATH];
	wchar_t bwbuf[MAX_PATH];

	MultiByteToWideChar(CP_UTF8,0,(*a)->wiki_title,-1,awbuf,MAX_PATH);
	MultiByteToWideChar(CP_UTF8,0,(*b)->wiki_title,-1,bwbuf,MAX_PATH);
	
	if (_wtoi((*a)->fd.cFileName))
	{
		wcscpy(awbuf,(*a)->fd.cFileName);
	}

	if (_wtoi((*b)->fd.cFileName))
	{
		wcscpy(bwbuf,(*b)->fd.cFileName);
	}
	
/*
	if (stricmp(language_code,"ru-ru") == 0)
	{
		printf("%S %S\n",awbuf,bwbuf);
	}
	*/
/*
	// ASCII
	WideCharToMultiByte(20127,0,awbuf,-1,abuf,MAX_PATH,"?",0);
	WideCharToMultiByte(20127,0,bwbuf,-1,bbuf,MAX_PATH,"?",0);
	
	i = stricmp(abuf,bbuf);
	if (i) return i;
*/
	
	{
		int ret;
		
		ret = CompareString(0,NORM_IGNORECASE,awbuf,(int)wcslen(awbuf),bwbuf,(int)wcslen(bwbuf));
		
		if (ret == CSTR_LESS_THAN)
		{
			return -1;
		}
		else
		if (ret == CSTR_GREATER_THAN)
		{
			return 1;
		}
		
		return 0;
	}

//	return wcsicmp(awbuf,bwbuf);
}

static void wiki_scan(const wchar_t *path,const wchar_t *subpath,int depth,wiki_t *parent)
{	
	findfile_t *ff_start;
	findfile_t *ff_last;
	int ff_count;
	
	ff_start = 0;
	ff_last = 0;
	ff_count = 0;
	
	{
		HANDLE h;
		wchar_t buf[MAX_PATH];
		WIN32_FIND_DATA fd;
		
		wsprintf(buf,L"%s\\*.txt",path);
		
		h = FindFirstFile(buf,&fd);
		if (h != INVALID_HANDLE_VALUE)
		{
			for(;;)
			{
				if (!(fd.dwFileAttributes & FILE_ATTRIBUTE_DIRECTORY))
				{
					wchar_t wbuf[MAX_PATH];
					char wiki_title[MAX_PATH];
							
					wsprintf(wbuf,L"%s\\%s",path,fd.cFileName);
					
					get_wiki_title(wiki_title,wbuf);
					
					findfile_add(&ff_start,&ff_last,&fd,wiki_title);
				}
			
				if (!FindNextFile(h,&fd)) break;
			}
		
			FindClose(h);
		}		
	}
	
	// count ff
	{
		findfile_t *ff;
		
		ff = ff_start;
		
		while(ff)
		{
			ff_count++;
		
			ff = ff->next;
		}
	}
		
	// sort
	if (ff_count)
	{
		findfile_t **ffarray;
		findfile_t *ff;
		int i;
		wchar_t buf[MAX_PATH];
		
		ffarray = malloc(sizeof(findfile_t *) * ff_count);
		ff = ff_start;
		
		for(i=0;i<ff_count;i++)
		{
			ffarray[i] = ff;
			ff = ff->next;
		}
		
		qsort(ffarray,ff_count,sizeof(findfile_t *),findfile_compare);

		for(i=0;i<ff_count;i++)
		{
			wchar_t *last;
			wchar_t *p;
			
			last = 0;
			p = ffarray[i]->fd.cFileName;
			while(*p)
			{
				if (*p == '.') last = p;
				p++;
			}
			if (last) 
			{
				*last++ = 0;
				
				if (wcsicmp(last,L"txt") == 0)
				{
					wchar_t subbuf[MAX_PATH];
					char dirname[MAX_PATH];
					char subbuf_utf8[MAX_PATH];
					char filename_utf8[MAX_PATH];
					char buf_utf8[MAX_PATH];
					char file_path_local_utf8[MAX_PATH];
					wiki_t *w;
					
					utf8_copy_wchar(subbuf_utf8,subpath);
					utf8_copy_wchar(filename_utf8,ffarray[i]->fd.cFileName);

					w = wiki_add(subbuf_utf8,filename_utf8,depth,parent,ffarray[i]->wiki_title);
					
					if (*subpath)
					{
						wsprintf(subbuf,L"%s\\%s",subpath,ffarray[i]->fd.cFileName);
					}
					else
					{
						wsprintf(subbuf,L"%s",ffarray[i]->fd.cFileName);
					}

					utf8_copy_wchar(file_path_local_utf8,file_path_local);
					hashref(dirname,w->link,0);
					sprintf(buf_utf8,"%s\\%s\\%s",file_path_local_utf8,strings[STRING_ID_SUPPORT_FOLDER],dirname);
					forward_slash_to_back_slash(buf_utf8);
					wchar_copy_utf8(buf,buf_utf8);
					CreateDirectory(buf,0);					
					
					wsprintf(buf,L"%s\\%s",path,ffarray[i]->fd.cFileName);
					wiki_scan(buf,subbuf,depth+1,w);
				}
			}
		}
	
		free(ffarray);
	}		
	
	findfile_clear(ff_start);
	
}

static void forward_slash_to_back_slash(char *p)
{
	while(*p)
	{
		if (*p == '/')
		{
			*p = '\\';
		}
		p++;
	}
}

static void forward_slash_to_back_slashW(wchar_t *p)
{
	while(*p)
	{
		if (*p == '/')
		{
			*p = '\\';
		}
		p++;
	}
}

int shownav(wiki_t *w,wiki_t *w2)
{
	wiki_t *parent;
	wiki_t *w3;
	
	if (w2->hidden)
	{
		return 0;
	}
	
	// is a parent?
	parent = w;
	while(parent)
	{
		if (parent == w2)
		{
			return 1;
		}
		
		parent = parent->parent;
	}
	
	// is a sibling? or parent sibling
	w3 = w->parent;
	while(w3)
	{
		if (w2->parent == w3)
		{
			return 1;
		}
		
		w3 = w3->parent;
	}
	
	// child of?
	if (w2->parent == w)
	{
		return 1;
	}
		
	return 0;
}

void getaname(char *buf,const char *s)
{
	char *d;
	const char *p;
	char tempaname[256];
	
	p = s;
	
	// skip em
	check((char **)&p,"<i>");
	
	d = tempaname;

	while(*p)
	{
		if (*p == '<') break;
		if (*p == '|') break;
		
		// I with accent.
		if ((*(unsigned char *)p == 0xC3) && (((unsigned char *)p)[1] == 0x8d))
		{	
			*(unsigned char *)d++ = 0xC3;
			*(unsigned char *)d++ = 0xAD;
			
			p += 2;
		}
		else
		{
			*d++ = utf8_tolower(*p);
			
			p++;
		}
	}
	
	*d = 0;

	hashref(buf,tempaname,1);
}

int isexpandable(wiki_t *w)
{
	wiki_t *w2;

	w2 = wiki_start;
	while(w2)
	{
		if (w2->depth >= 1)
		{
			if (shownav(w,w2))
			{
				return 1;
			}
		}
	
		w2 = w2->next;
	}
	
	return 0;
}

static void wiki(const char *path)
{
	wiki_t *w;
	wchar_t wbuf[MAX_PATH];
	wchar_t support_path_wbuf[MAX_PATH];
	char *buf;
	wchar_t path_wbuf[MAX_PATH];
	
	wchar_copy_utf8(path_wbuf,path);
	
	buf = (char *)malloc(1 * 1024 * 1024);
	
	wchar_copy_utf8(support_path_wbuf,strings[STRING_ID_SUPPORT_FOLDER]);
	wchar_remove_extension(support_path_wbuf);
	
	wsprintf(wbuf,L"%s\\%s",file_path_local,support_path_wbuf);
	CreateDirectory(wbuf,0);
	
//	wiki_scan(path_wbuf,L"",0,0);
		
	w = wiki_start;
	while(w)	
	{
		FILE *o;
		wchar_t wlink[MAX_PATH];
		wchar_t support_wbuf[MAX_PATH];
		wchar_t wiki_filename[MAX_PATH];
		
//		printf("wiki %s\n",w->name);

		id_clear();
		*id_last_h=0;
		
		wchar_copy_utf8(wlink,w->link);
		forward_slash_to_back_slashW(wlink);
		
		wchar_copy_utf8(support_wbuf,strings[STRING_ID_SUPPORT_FOLDER]);
		wchar_remove_extension(support_path_wbuf);
		
		wsprintf(wiki_filename,L"%s\\%s\\%s",file_path_local,support_wbuf,wlink);
		CreateDirectory(wiki_filename,0);

		wsprintf(wiki_filename,L"%s\\%s\\%s\\index.html",file_path_local,support_wbuf,wlink);
		
		// known url.
		{
			sprintf(known_url_buf,"%s/%s/%s",url_path_local,strings[STRING_ID_SUPPORT_FOLDER],w->link);
			
			known_url_add(known_url_buf,0,1);
		}
		
		o = _wfopen(wiki_filename,L"wb");
		if (o)
		{
			wchar_t wsubpath[MAX_PATH];
			FILE *f;

			write_head(o,w->name,PAGE_SUPPORT,1,isexpandable(w));
							
			// left contents:
			fprintf(o,"<div class=\"wikinav\">\r\n");
			fprintf(o,"<ul>\r\n");
		
			{
				wiki_t *w2;
				
				w2 = wiki_start;
				while(w2)
				{
					if (shownav(w,w2))
					{
						fprintf(o,"<li class=\"wikinavindent%d\"><p><a href=\"%s/%s/%s\">%s%s%s</a></p></li>\r\n",w2->depth+1,url_path_local,strings[STRING_ID_SUPPORT_FOLDER],w2->link,w==w2?"<b>":"",w2->title,w==w2?"</b>":"");
					}
				
					w2 = w2->next;
				}
			}
			
			fprintf(o,"</ul>\r\n");
			fprintf(o,"</div>\r\n");

			fprintf(o,"<div class=\"wikicontent\">\r\n");
			
			wchar_copy_utf8(wsubpath,w->subpath);
			wsprintf(wbuf,L"%s\\%s.txt",path_wbuf,wsubpath);
			
			f = _wfopen(wbuf,L"rb");
			if (f)
			{
				int in_pre;
				int is_italic;
				int is_bold;
				int in_dl;
				int in_dd;
				int in_ul;
				int in_li[10];
				int in_li_i;
				int was_pre_nl;
				int first_td;
				int line;
				
				in_pre = 0;
				is_italic = 0;
				is_bold = 0;
				in_dl = 0;
				in_dd = 0;
				in_ul = 0;
				first_td = 1;
				for(in_li_i=0;in_li_i<10;in_li_i++)
				{
					in_li[in_li_i] = 0;
				}
				was_pre_nl = 0;
				line = 0;

				while(fgets(buf,65536,f))
				{
					char *p;
					char *d;
					char expanded[65536];
					
					if (is_bold)
					{
						printf("%S\\%S.txt:%d: warning: still bold\n",path_wbuf,wsubpath,line);
						warnings++;
					}

					if (is_italic)
					{
						printf("%S\\%S.txt:%d: warning: still italic\n",path_wbuf,wsubpath,line);
						warnings++;
					}

					is_italic = 0;
					is_bold = 0;
					
					line++;
					
					p = skip_utf8_bom(buf);
					
					while(*p)
					{
						if ((*p == '\r') && (p[1] == '\n')) break;
						if (*p == '\n') break;
						
						p++;
					}
					
					*p = 0;

					// do pre stuff
					p = skip_utf8_bom(buf);

					if (in_pre)
					{
						// get pre						
						// escape html
						if (check(&p,"</pre>"))
						{
							in_pre = 0;
							fprintf(o,"</pre>\r\n");
							continue;
						}
						
						if (was_pre_nl)
						{
							fprintf(o,"<br/>",p);
						}
						
						d = expanded;
						
						while(*p)
						{
							if (*p == '<')
							{
								*d++ = '&';
								*d++ = 'l';
								*d++ = 't';
								*d++ = ';';
								p++;
							}
							else
							if (*p == '>')
							{
								*d++ = '&';
								*d++ = 'g';
								*d++ = 't';
								*d++ = ';';
								p++;
							}
							else
							if (*p == '&')
							{
								*d++ = '&';
								*d++ = 'a';
								*d++ = 'm';
								*d++ = 'p';
								*d++ = ';';
								p++;
							}
							else
							{
								*d++ = *p;
								p++;
							}
						}
						*d = 0;
						
						p = expanded;
						
						fprintf(o,"%s",p);
						
						was_pre_nl = 1;
						continue;	
					}
					else
					{
						was_pre_nl = 0;
					}
					
					// start here......
					
					p = skip_utf8_bom(buf);
		
					// dl stuff
					if (in_dl)
					{
						if (check(&p,"</dl>"))
						{
							if (in_dd)
							{
								fprintf(o,"</dd>\r\n");
								in_dd = 0;
							}
						
							in_dl--;
							fprintf(o,"</dl>\r\n");

							continue;
						}

						if (*p != ';')
						{
							if (!in_dd)
							{
								fprintf(o,"<dd>");
								in_dd = 1;
							}
						}
					}

					// ul stuff
					if (in_ul)
					{
						if (check(&p,"</ul>"))
						{
							if (in_li[in_ul])
							{
								fprintf(o,"</li>\r\n");
								in_li[in_ul] = 0;
							}
						
							in_ul--;
							fprintf(o,"</ul>\r\n");

							continue;
						}

						if (*p != '*')
						{
							if (!in_li[in_ul])
							{
								fprintf(o,"<li>");
								in_li[in_ul] = 1;
							}
						}
					}
															
					if (check(&p,"{{"))
					{
						char *macro;
						
						macro = p;
						
						while(*p)
						{
							if ((*p == '}') && (p[1] == '}'))
							{
								*p = 0;
								p += 2;
								break;
							}
							p++;
						}
						
						write_macro(o,macro);
					}
					else
					if (check(&p,"<pre>"))
					{
						in_pre = 1;
						fprintf(o,"<pre>");
					}
					else
					if (check(&p,"<beta>"))
					{
//						fprintf(o,"<div class=\"beta\">Requires Everything 1.4</div>\r\n");
					}
					else
					if (check(&p,"<dl>"))
					{
						in_dl++;
						fprintf(o,"<dl>\r\n");
					}
					else
					if (check(&p,"<ul>"))
					{
						in_ul++;
						fprintf(o,"<ul>\r\n");
					}
					else
					{
						d = expanded;
						
						while(*p)
						{
							if (check(&p,"<ul>"))
							{
								d = cat(d,"<ul>");
							}
							else
							if (check(&p,"</ul>"))
							{
								d = cat(d,"</ul>");
							}
							else
							if (check(&p,"<code>"))
							{
								d = cat(d,"<code>");
							}
							else
							if (check(&p,"</code>"))
							{
								d = cat(d,"</code>");
							}
							else
							if (check(&p,"<br"))
							{
								d = cat(d,"<br/>");
								
								while(*p)
								{	
									if (*p == '>')
									{
										*p++ = 0;
										break;
									}

									p++;
								}
							}
							else
					/*		if (check(&p,"<img"))
							{
								const char *start;
								
								d = cat(d,"<img");
								
								start = p;
								
								while(*p)
								{	
									if (*p == '>')
									{
										*p++ = 0;
										break;
									}

									p++;
								}

								d = cat(d,start);
								d = cat(d,">");
							}
							else					*/
							if (check(&p,"[[File:"))
							{
								char *url;
								char *text;
								char localurl[MAX_PATH];
								
								url = p;
								text = 0;
								
								while(*p)
								{
									if ((*p == ']') && (p[1] == ']')) 
									{
										*p = 0;
										p += 2;
										break;
									}
									else
									if ((*p == '|') && (p[1] == 'a') && (p[2] == 'l') && (p[3] == 't') && (p[4] == '='))
									{
										*p = 0;
										p+=5;
										text = p;
									}								
									
									p++;
								}
								
								d = cat(d,"<img src=\"");
								
								makelocalurl(localurl,url);
								d = cat(d,localurl);

								d = cat(d,"\"");

								if (text)
								{
									d = cat(d," alt=\"");
									d = cat(d,text);
									d = cat(d,"\"");
								}
								
								d = cat(d," />");
								
							}
							else					
							if (check(&p,"'''''"))
							{
								is_italic = !is_italic;
								is_bold = !is_bold;
								
								d = cat(d,is_bold?"<b><i>":"</i></b>");
							}
							else							
							if (check(&p,"'''"))
							{
								is_bold = !is_bold;
								
								d = cat(d,is_bold?"<b>":"</b>");
							}
							else							
							if (check(&p,"''"))
							{
								is_italic = !is_italic;
								
								d = cat(d,is_italic?"<i>":"</i>");
							}
							else							
							if ((*p == '[') && (p[1] == '['))
							{	
								char *url;
								char *text;
								char localurl[MAX_PATH];
								char hashonlybuf[MAX_PATH];
								
								p += 2;
								
								url = p;
								text = 0;
								
								while(*p)
								{
									if ((*p == ']') && (p[1] == ']')) 
									{
										*p = 0;
										p += 2;
										break;
									}
									else
									if (*p == '|')
									{
										*p = 0;
										p++;
										text = p;
									}								
									
									p++;
								}
								
								// no text, and a non-protocol url path? use the last part of the url 
								if (!text)
								{
									if (!is_url_protocol(url))
									{
										char *last;
										char *p2;
										
										last = 0;
										
										p2 = url;
										while(*p2)
										{
											if ((*p2 == '/') && (p2[1]))
											{
												last = p2+1;
											}

											p2++;
										}
										
										text = last;
									}
								}
								
								// hashonly?
								if (*url == '#')
								{
									sprintf(hashonlybuf,"%s/%s/%s%s",url_path_local,strings[STRING_ID_SUPPORT_FOLDER],w->link,url);
									url = hashonlybuf;
								}
								
								d = cat(d,"<a href=\"");
								
								makelocalurl(localurl,url);
								d = cat(d,localurl);
								
								url_add(wbuf,line,localurl);

								d = cat(d,"\">");

								if (text)
								{
									d = cat(d,text);
								}
								else
								{
									d = cat(d,localurl);
								}
								
								d = cat(d,"</a>");
														
/*								char *wikiname;
								char url[65536];
								char *text;
								char hashrefbuf[65536];
								wiki_t *wref;
								
								p += 2;
								
								wikiname = p;
								text = 0;
								
								while(*p)
								{
									if ((*p == ']') && (p[1] == ']')) 
									{
										*p = 0;
										p += 2;
										break;
									}
									else
									if (*p == '|')
									{
										*p = 0;
										p++;
										text = p;
									}								
									
									p++;
								}

								wref = wiki_fix_name(url,wikiname,w);

								d = cat(d,"<a href=\"");
								if (wref)
								{
									d = cat(d,url_path_local);
//									d = cat(d,"/support/");
									d = cat(d,"/");
									hashref(hashrefbuf,url,0);
									d = cat(d,hashrefbuf);
								}
								else
								{
									d = cat(d,wikiname);
								}
								d = cat(d,"\">");
								if (*wikiname == '/')
								{
									d = cat_escape_html(d,text?text:(wref?wref->name:(wikiname+1)));
								}
								else
								{
									d = cat_escape_html(d,text?text:(wref?wref->name:wikiname));
								}
								
								d = cat(d,"</a>");
*/								
							}
							else
							if (*p == '<')
							{
								*d++ = '&';
								*d++ = 'l';
								*d++ = 't';
								*d++ = ';';
								p++;
							}
							else
							if (*p == '>')
							{
								*d++ = '&';
								*d++ = 'g';
								*d++ = 't';
								*d++ = ';';
								p++;
							}
							else
							if (*p == '&')
							{
								*d++ = '&';
								*d++ = 'a';
								*d++ = 'm';
								*d++ = 'p';
								*d++ = ';';
								p++;
							}
							else
							{
								*d++ = *p;
								p++;
							}
						}
						*d = 0;
						
						p = expanded;
						
						if (*p == '{')
						{
							p++;

							fprintf(o,"<table>\r\n<tr>");
							first_td = 1;
						}
						else
						if (*p == '|')
						{
							p++;
							if (check(&p,"rowspan=\""))
							{
								int rowspan;
								
								rowspan=atoi(p);
								
								while(*p)
								{
									if (*p == '|') 
									{
										p++;

										fprintf(o,"<td rowspan=\"%d\">%s</td>",rowspan,p);
										
										break;
									}
									p++;
								}
							}
							else
							if (*p == '-')
							{
								fprintf(o,"</tr>\r\n<tr>");
								first_td = 1;
							}
							else
							if (*p == '}')
							{
								fprintf(o,"</tr>\r\n</table>\r\n");
							}
							else
							if (*p == ' ')
							{
								p++;
								if (first_td)
								{
									fprintf(o,"<td class=\"wikinowrap\">%s</td>",p);
									first_td = 0;
								}
								else
								{
									fprintf(o,"<td>%s</td>",p);
								}
							}
						}
						else
						if (*p == '!')
						{
							p++;
							if (*p == ' ')
							{
								p++;
								fprintf(o,"<th class=\"wikinowrap\">%s</th>",p);
							}
						}
						else
						if (*p == ';')
						{
							char aname[256];

							p++;
							
							getaname(aname,p);
							
							if (in_dd)
							{
								fprintf(o,"</dd>\r\n");
								in_dd = 0;
							}
							/*
							if (id_find(aname))
							{
								char tempbuf[1024];
								
								strcpy(tempbuf,id_last_h);
								strcat(tempbuf,"_");
								strcat(tempbuf,aname);
								strcpy(aname,tempbuf);
							}
*/
							id_add(aname);
							
							// skip past |
							{
								char *p2;
								
								p2 = p;
								
								while(*p2)
								{
									if (*p2 == '|')
									{
										p = p2 + 1;
										break;
									}
									
									p2++;
								}
							}
							
							fprintf(o,"<dt id=\"%s\"><p>%s</p></dt>\r\n",aname,p);

							known_url_add(known_url_buf,aname,1);
						}
						else
						if ((*p == '_') && (p[1] == '_')) 
						{
							// __TOC__
						}
						else
						if ((*p == '=') && (p[1] == '='))
						{
							int depth;
							char *start;
							char aname[MAX_PATH];
							
							p+=2;
							depth = 0;
							
							while(*p)
							{
								if (*p != '=') break;
								
								depth++;
								p++;
							}
							
							start = p;
							
							while(*p)
							{
								if (*p == '=') break;

								p++;
							}
							
							*p = 0;
							
							getaname(aname,start);
							
							id_add(aname);
							strcpy(id_last_h,aname);
							fprintf(o,"<h2 id=\"%s\">%s</h2>\r\n",aname,start);

							known_url_add(known_url_buf,aname,1);
						}
						else
						if (*p == '=')
						{
							char *start;
							char aname[MAX_PATH];
							
							p+=1;

							start = p;
							
							while(*p)
							{
								if (*p == '=') break;

								p++;
							}
							
							*p = 0;

							getaname(aname,start);
							
							id_add(aname);
							strcpy(id_last_h,aname);
							fprintf(o,"<h1 id=\"%s\">%s</h1>\r\n",aname,start);

							known_url_add(known_url_buf,aname,1);
						}
						else
						if (*p == '*')
						{
							p+=1;

							if (in_li[in_ul])
							{
								fprintf(o,"</li>\r\n");
								in_li[in_ul] = 0;
							}

							fprintf(o,"<li>");
							in_li[in_ul] = 1;

							fprintf(o,"<p>%s</p>",p);
//							fprintf(o,"%s",p);
						}
						else						
						{
							p = skipws(p);
							
							if (*p)
							{
								// p
								fprintf(o,"<p>%s</p>\r\n",p);
							}
							else
							{
								fprintf(o,"<br/>\r\n");
							}
						}
					}
				}
				
				fclose(f);
			}
			else
			{
				printf("%S: error: cant open %S\n",language_subfolder,wbuf);
				errors++;
			}
			
			fprintf(o,"<br/>\r\n");
//			fprintf(o,"Please note this support page is intended for the Everything 1.3 beta<br/>");
//			fprintf(o,"<p>Please report errors <a href=\""HOST"/contact/\">here</a></p>");
			fprintf(o,"</div>\r\n");

			fprintf(o,"<div style=\"clear:both\">\r\n");
			fprintf(o,"</div>\r\n");

			write_footer(o,1);
			
			fclose(o);
			
			{
				HANDLE h;
				
				h = CreateFile(wiki_filename,FILE_WRITE_ATTRIBUTES,FILE_SHARE_READ|FILE_SHARE_WRITE|FILE_SHARE_DELETE,0,OPEN_EXISTING,0,0);
				
				if (h != INVALID_HANDLE_VALUE)
				{
					if (SetFileTime(h,0,0,&exe_filetime))
					{
					}
					else
					{
						printf("SetFileTime failed: get last error %d\n",GetLastError());
					}
					
					CloseHandle(h);
				}
				else
				{
					printf("unable to set file filetime\n");
				}
			}
		}
		
		w = w->next;
	}
	
	free(buf);
/*	
__TOC__
==About "''Everything''"==

===What is "''Everything''"?===
"''Everything''" is a search engine for Windows.

"''Everything''" can quickly locate files and/or folders by name.

Basic file operations can be applied to the results.

"''Everything''" does not index file contents.

===How is Everything different from other search engines===
* Small installation file.
* Clean and simple user interface.
* Quick file indexing.
* Quick searching.
* Quick startup.
* Minimal resource usage.
* Small database on disk.
* real-time updating.

{{Languages}}
*/
}

static int makevoidtools_isws(char c)
{
	if (c == ' ') return 1;
	if (c == '\t') return 1;
	if (c == '\r') return 1;
	if (c == '\n') return 1;
	
	return 0;
}

static int makevoidtools_check(char **pp,const char *str)
{
	char *p;
	
	p = *pp;
	
	while(*str)
	{
		if (*str != *p)
		{
			return 0;
		}
		
		p++;
		str++;
	}
	
	*pp = p;
	
	return 1;
}

/*
static char *makevoidtools_trim(char *buf,char *s,char *term)
{
	char *d;
	char *last;
	
	d = buf;
	last =0 ;
	
	while(makevoidtools_isws(*s))
	{
		s++;
	}
	
	while(*s)
	{
		if (*s == '<')
		{
			s++;
			
			while(*s)
			{
				if (*s == '>')
				{
					s++;
					break;	
				}
				
				s++;
			}
			
			continue;
		}
		else
		if (makevoidtools_isws(*s))
		{
			if (!last)
			{
				last = d;
			}
		}
		else
		{
			last = 0;
		}

		*d++ = *s;
		s++;
	}
	
	if (last)
	{
		*last = 0;
	}
	
	*d = 0;
	
	return s;
}
*/

static void makevoidtools_trim(char *s)
{
}

static char encoding_table[] = {'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H',
                                'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P',
                                'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X',
                                'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f',
                                'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n',
                                'o', 'p', 'q', 'r', 's', 't', 'u', 'v',
                                'w', 'x', 'y', 'z', '0', '1', '2', '3',
                                '4', '5', '6', '7', '8', '9', '+', '/'};

static char *decoding_table = NULL;

void build_decoding_table() 
{
	int i;

    decoding_table = (char *)malloc(256);

    for (i = 0; i < 64; i++)
    {
        decoding_table[(unsigned char) encoding_table[i]] = i;
	}
}

static char *makevoidtools_decode_base64(char *data)
{
	int input_length;
	int output_length;
	unsigned char *decoded_data;
	int i;
	int j;
	
	input_length = (int)strlen(data);
	
   if (decoding_table == NULL) build_decoding_table();

    output_length = input_length / 4 * 3;
    if (data[input_length - 1] == '=') (output_length)--;
    if (data[input_length - 2] == '=') (output_length)--;

    decoded_data = (unsigned char *)malloc(output_length + 1);
    if (decoded_data == NULL) return NULL;

    for (i = 0, j = 0; i < input_length;) {

        DWORD sextet_a = data[i] == '=' ? 0 & i++ : decoding_table[data[i++]];
        DWORD sextet_b = data[i] == '=' ? 0 & i++ : decoding_table[data[i++]];
        DWORD sextet_c = data[i] == '=' ? 0 & i++ : decoding_table[data[i++]];
        DWORD sextet_d = data[i] == '=' ? 0 & i++ : decoding_table[data[i++]];

        DWORD triple = (sextet_a << 3 * 6)
        + (sextet_b << 2 * 6)
        + (sextet_c << 1 * 6)
        + (sextet_d << 0 * 6);

        if (j < output_length) decoded_data[j++] = (triple >> 2 * 8) & 0xFF;
        if (j < output_length) decoded_data[j++] = (triple >> 1 * 8) & 0xFF;
        if (j < output_length) decoded_data[j++] = (triple >> 0 * 8) & 0xFF;
    }

	decoded_data[output_length] = 0;

    return (char *)decoded_data;
}

static void makevoidtools_remove_newlines(char *s)
{
	char *d;
	char *p;
	
	d = s;
	p = s;
	
	while(*p)
	{
		if ((*p == '\r') && (p[1] == '\n'))
		{
			p+=2;
		}
		else
		{
			*d++ = *p;
			
			p++;
		}
	}
	
	*d = 0;
}

static char *makevoidtools_get_csv_value(char *buf,char *p)
{
	char *d;
	
	d = buf;
	
	while(*p)
	{
		if (*p == '\r')
		{
			break;
		}
		else
		if (*p == '\n')
		{
			break;
		}
		else
		if (*p == '"')
		{
			p++;
			
			while(*p)
			{
				if (*p == '\\')
				{
					p++;

					if (*p)
					{
						switch(*p)					
						{
							case '\\':
								*d++ = '\\';
								break;

							case '"':
								*d++ = '"';
								break;
						}
						p++;
					}
				}
				else
				if (*p == '"')
				{
					p++;
					break;
				}
				else
				if (*p == '\r')
				{
					break;
				}
				else
				if (*p == '\n')
				{
					break;
				}
				else
				{
					*d++ = *p;
					p++;
				}
			}
		}
		else
		if (*p == ',')
		{
			p++;
			break;
		}
		else
		{	
			*d++ = *p;

			p++;
		}
	}
	
	*d = 0;
	
	return p;
}

static void fprintf_file(FILE *o,const char *filename)
{
	FILE *f;
	
	f = fopen(filename,"rb");
	if (f)
	{
		int size;
		char *buf;
		
		fseek(f,0,SEEK_END);
		size = ftell(f);
		fseek(f,0,SEEK_SET);

		buf = (char  *)malloc(size);
		fread(buf,1,size,f);
		
		fwrite(buf,1,size,o);
	
		free(buf);
		fclose(f);
	}
}

static void get_link(char *buf,int page_id)
{
	switch(page_id)
	{
		case PAGE_HOME: sprintf(buf,"%s/",url_path_local); break;
		case PAGE_DOWNLOAD: get_template_url(buf,STRING_ID_DOWNLOADS_TEMPLATE); break;
		case PAGE_FAQ: get_template_url(buf,STRING_ID_FAQ_TEMPLATE); break;

		case PAGE_SUPPORT: 
			makelocalurl(buf,strings[STRING_ID_SUPPORT_URL]); 
			break;
			
		case PAGE_FORUM: 
		{
			char forum_url[MAX_PATH];
			
			// always root
			makelocalurl(forum_url,"/forum"); 
			
			sprintf(buf,"%s",strings[STRING_ID_FORUMS_URL]);
			strreplace(buf,"{{FORUMS_URL}}",forum_url);
			
			break; 
		}
			
		case PAGE_DONATE: get_template_url(buf,STRING_ID_DONATE_TEMPLATE); break;
		case PAGE_CONTACT: get_template_url(buf,STRING_ID_CONTACT_TEMPLATE); break;
	}
}

static const char *isstr(const char *p,const char *s)
{
	while(*s)
	{
		if(*p != *s)
		{
			return 0;
		}
		
		p++;
		s++;
	}
	
	return p;
}

static int utf8_tolower(int c)
{
	if (c & 0x80)
	{
		return c;
	}
	
	if (c < 0)
	{
		return c;
	}
	
	return tolower(c);
}

static const char *isistr(const char *p,const char *s)
{
	while(*s)
	{
		if(utf8_tolower(*p) != utf8_tolower(*s))
		{
			return 0;
		}
		
		p++;
		s++;
	}
	
	return p;
}

static void strreplace(char *buf,const char *key,const char *value)
{
	const char *p;
	char *d;
	const char *vp;
	char newbuf[MAX_PATH];
	
	p = buf;
	d = newbuf;
	
	while(*p)
	{
		const char *p2;
		
		p2 = isistr(p,key);
		
		if (p2)
		{
			p = p2;
			
			vp = value;
			
			while(*vp)
			{
				*d++ = *vp;
				vp++;
			}
		}
		else
		{
			*d++ = *p;
			p++;
		}
	}
	
	*d = 0;

	strcpy(buf,newbuf);
}

static void get_title(char *buf,const char *subtitle)
{
	if (subtitle)
	{
		strcpy(buf,strings[STRING_ID_TITLE_FORMAT]);
		strreplace(buf,"{{TITLE}}",subtitle);
	}
	else
	{
		strcpy(buf,strings[STRING_ID_HOME_TITLE]);
	}
}

static language_t *language_add(const wchar_t *filename,const char *code)
{
	language_t *l;
	
//	printf("adding language %S\n",filename);
	
	l = (language_t *)malloc(sizeof(language_t));
	
	l->code = stralloc(code);
	l->is_rtl = 0;
	
	{
		int i;
		
		for(i=0;i<STRING_ID_COUNT;i++)
		{
			l->strings[i] = (char *)string_texts[i];
		}
	}
	
	{
		FILE *f;
		
		f = _wfopen(filename,L"rb");
		if (f)
		{
			char buf[4096];
			
			while(fgets(buf,4096,f))
			{
				char *p;
				char *key;

				// remove newline
				p = skip_utf8_bom(buf);
				
				while(*p)
				{
					if ((*p == '\r') && (p[1] == '\n'))
					{
						*p = 0;
						break;
					}

					if (*p == '\n')
					{
						*p = 0;
						break;
					}
					
					p++;
				}
				
				p = skip_utf8_bom(buf);
				
				// skip ws
				while(*p)
				{
					if (!makevoidtools_isws(*p))
					{
						break;
					}
					
					p++;
				}
				
				if (*p != '/')
				{
					key = p;

					// skip KEY
					while(*p)
					{
						if (makevoidtools_isws(*p))
						{
							*p++ = 0;
							
							break;
						}
						
						if (*p == '=')
						{
							*p++ = 0;
							
							goto got_eq;
							
						}
						
						p++;
					}
						
					// skip ws
					while(*p)
					{
						if (!makevoidtools_isws(*p))
						{
							break;
						}
						
						p++;
					}					
					
					if (*p == '=')
					{
						p++;

got_eq:

						// skip ws
						while(*p)
						{
							if (!makevoidtools_isws(*p))
							{
								break;
							}
							
							p++;
						}					
						
						if (*p == '"')
						{
							char *value;
							
							p++;

							value = p;
							
							while(*p)
							{
								if (*p == '"')
								{
									*p++ = 0;
									
									break;
								}
								
								p++;
							}
							
//							printf("KEY %s VALUE %s\n",key,value);
							
							if (isstr(key,"_LANGUAGE_NAME"))
							{
								l->name = stralloc(value);
							}
							else
							if (isstr(key,"_LANGUAGE_ENGLISH_NAME"))
							{
							}
							else
							if (isstr(key,"_LANGUAGE_TRANSLATOR"))
							{
							}
							else
							if (isstr(key,"_LANGUAGE_TRANSLATOR_LINK"))
							{
							}
							else
							if (isstr(key,"_LANGUAGE_TEXT_DIRECTION"))
							{
								if (stricmp(value,"RTL") == 0)
								{
									l->is_rtl = 1;
								}
							}
							else
							{
								int string_id;
								
								// find a string.
								string_id = string_find_key(key);
								
								if (string_id != -1)
								{
									l->strings[string_id] = stralloc(value);
								}
								else
								{
									printf("%S: warning: unknown string defined %s\n",filename,key);
									warnings++;
								}
							}
						}
					}
				}
			}
			
			fclose(f);
		}
	}
	
	{
		int i;
		
		for(i=0;i<STRING_ID_COUNT;i++)
		{
			if (l->strings[i] == string_texts[i])
			{
				printf("%S: warning: undefined string %s\n",filename,string_keys[i]);
				warnings++;
			}
		}
	}
		
	if (!l->name)
	{
		printf("%S: error: _LANGUAGE_NAME not set\n",filename);
		errors++;
		
		l->name = stralloc("Unknown");
	}
	
	{
		char *p;
		
		p = l->code;
		while(*p)
		{
			if (*p == '.')
			{
				*p = 0;
				break;
			}
			
			*p = utf8_tolower(*p);
			p++;
		}
	}
	
	if (language_start)
	{
		language_last->next = l;
	}
	else
	{
		language_start = l;
	}
	
	language_last = l;
	l->next = 0;
	
	return l;
}

static void language_scan(void)
{	
	HANDLE h;
	wchar_t buf[MAX_PATH];
	WIN32_FIND_DATA fd;
	
	wsprintf(buf,L"*.txt");
	
	h = FindFirstFile(buf,&fd);
	if (h != INVALID_HANDLE_VALUE)
	{
		for(;;)
		{
			if (!(fd.dwFileAttributes & FILE_ATTRIBUTE_DIRECTORY))
			{
				if (!((fd.cFileName[0] == '{') && (fd.cFileName[1] == '{')))
				{
					char language_utf8[MAX_PATH];
					
					utf8_copy_wchar(language_utf8,fd.cFileName);
					
					language_add(fd.cFileName,language_utf8);
				}
			}
		
			if (!FindNextFile(h,&fd)) break;
		}
	
		FindClose(h);
	}		
	
}

static language_t *language_find(const char *code)
{
	language_t *l;
	
	l = language_start;
	while(l)
	{
		if (stricmp(l->code,code) == 0)
		{
			return l;
		}
		
		l = l->next;
	}
	
	return 0;
}

static int string_find_key(const char *key)
{
	int i;
	
	for(i=0;i<STRING_ID_COUNT;i++)
	{
		if (stricmp(string_keys[i],key) == 0)
		{
			return i;
		}
	}
	
	return -1;
}

static int is_absolute_url(const char *s)
{
	const char *p;
	
	p = s;
	
	if (*p == '/')
	{
		return 1;
	}
	
	while(*p)
	{
		if (*p == ':')
		{
			return 1;
		}
		
		if (*p == '/')
		{
			return 0;
		}
		
		p++;
	}
	
	return 0;
}

static int is_url_protocol(const char *s)
{
	const char *p;
	
	p = s;
	
	while(*p)
	{
		if (*p == ':')
		{
			return 1;
		}
		
		if (*p == '/')
		{
			return 0;
		}
		
		p++;
	}
	
	return 0;
}

static void expand_url(char *buf)
{
	char tempbuf[MAX_PATH];
	
	// url
	{
		char *p;
		char *d;
		
		p = buf;
		d = tempbuf;
		
		while(*p)
		{
			if ((*p == '[') && (p[1] == '['))
			{
				char *url;
				char *atext;
				char localurl[MAX_PATH];
				
				p+=2;
				
				// get url
				url = p;
				atext = 0;
				
				while(*p)
				{
					if (*p == '|')
					{
						*p++ = 0;
						
						atext = p;
						
						while(*p)
						{
							if ((*p == ']') && (p[1] == ']'))
							{
								*p = 0;
								p += 2;
								break;
							}
							
							p++;
						}
						
						break;
					}
					
					if ((*p == ']') && (p[1] == ']'))
					{
						*p = 0;
						p += 2;
						break;
					}
					
					p++;
				}

				if (!atext)
				{
					if (!is_url_protocol(url))
					{
						char *last;
						char *p2;
						
						last = 0;
						
						p2 = url;
						while(*p2)
						{
							if ((*p2 == '/') && (p2[1]))
							{
								last = p2+1;
							}

							p2++;
						}
						
						atext = last;
					}
				}			
					
				d = cat(d,"<a href=\"");
				
				// we have a text and url now.
				makelocalurl(localurl,url);
				d = cat(d,localurl);

				url_add(L"expand_url",0,localurl);

				d = cat(d,"\">");
				
				if (atext)
				{
					d = cat(d,atext);
				}
				else
				{
					d = cat(d,localurl);
				}
				
				d = cat(d,"</a>");
//<a href=\"%s/%s\">More...</a>,url_path_local,"faq/",strings[STRING_ID_HOME_MORE]	
			}
			else
			{
				*d++ = *p;
				p++;
			}
		}
		
		*d = 0;
	}	
	
	strcpy(buf,tempbuf);
}

static void get_string(char *buf,int id,const char *key,const char *value)
{
	strcpy(buf,strings[id]);
	if (key)
	{
		strreplace(buf,key,value);
	}
	
	expand_url(buf);
}

static void write_template_file(FILE *o,const char *filename)
{
	FILE *f;
	wchar_t path_and_filename_wbuf[MAX_PATH];
	
	wchar_copy_utf8(path_and_filename_wbuf,filename);
	
	f = _wfopen(path_and_filename_wbuf,L"rb");
	if (f)
	{
		char *buf;
		
		buf = malloc(65536);

		{
			int in_pre;
			int is_italic;
			int is_bold;
			int done_toc;
			int in_dl;
			int in_dd;
			int in_ul;
			int in_li[10];
			int in_li_i;
			int was_pre_nl;
			int first_td;
			int line;
			
			in_pre = 0;
			is_italic = 0;
			is_bold = 0;
			done_toc = 0;
			in_dl = 0;
			in_dd = 0;
			in_ul = 0;
			first_td = 1;
			for(in_li_i=0;in_li_i<10;in_li_i++)
			{
				in_li[in_li_i] = 0;
			}
			was_pre_nl = 0;
			line = 0;
			
			while(fgets(buf,65536,f))
			{
				char *p;
				char *d;
				char expanded[65536];
				
				if (is_bold)
				{
					printf("%S:%d: warning: still bold\n",path_and_filename_wbuf,line);
					warnings++;
				}

				if (is_italic)
				{
					printf("%S:%d: warning: still italic\n",path_and_filename_wbuf,line);
					warnings++;
				}
				
				is_italic = 0;
				is_bold = 0;
				line++;
				
				p = skip_utf8_bom(buf);
				
				while(*p)
				{
					if ((*p == '\r') && (p[1] == '\n')) break;
					if (*p == '\n') break;
					
					p++;
				}
				
				*p = 0;

				// do pre stuff
				p = skip_utf8_bom(buf);

				if (in_pre)
				{
					// get pre						
					// escape html
					if (check(&p,"</pre>"))
					{
						in_pre = 0;
						fprintf(o,"</pre>\r\n");
						continue;
					}
					
					if (was_pre_nl)
					{
						fprintf(o,"<br/>",p);
					}
					
					d = expanded;
					
					while(*p)
					{
						if (*p == '<')
						{
							*d++ = '&';
							*d++ = 'l';
							*d++ = 't';
							*d++ = ';';
							p++;
						}
						else
						if (*p == '>')
						{
							*d++ = '&';
							*d++ = 'g';
							*d++ = 't';
							*d++ = ';';
							p++;
						}
						else
						if (*p == '&')
						{
							*d++ = '&';
							*d++ = 'a';
							*d++ = 'm';
							*d++ = 'p';
							*d++ = ';';
							p++;
						}
						else
						{
							*d++ = *p;
							p++;
						}
					}
					*d = 0;
					
					p = expanded;
					
					fprintf(o,"%s",p);
					
					was_pre_nl = 1;
					continue;	
				}
				else
				{
					was_pre_nl = 0;
				}
				
				// start here......
				
				p = skip_utf8_bom(buf);
	
				// dl stuff
				if (in_dl)
				{
					if (check(&p,"</dl>"))
					{
						if (in_dd)
						{
							fprintf(o,"</dd>\r\n");
							in_dd = 0;
						}
					
						in_dl--;
						fprintf(o,"</dl>\r\n");

						continue;
					}

					if (*p != ';')
					{
						if (!in_dd)
						{
							fprintf(o,"<dd>");
							in_dd = 1;
						}
					}
				}

				// ul stuff
				if (in_ul)
				{
					if (check(&p,"</ul>"))
					{
						if (in_li[in_ul])
						{
							fprintf(o,"</li>\r\n");
							in_li[in_ul] = 0;
						}
					
						in_ul--;
						fprintf(o,"</ul>\r\n");

						continue;
					}

					if (*p != '*')
					{
						if (!in_li[in_ul])
						{
							fprintf(o,"<li>");
							in_li[in_ul] = 1;
						}
					}
				}
														
				if (check(&p,"{{"))
				{
					char *macro;
					
					macro = p;
					
					while(*p)
					{
						if ((*p == '}') && (p[1] == '}'))
						{
							*p = 0;
							p += 2;
							break;
						}
						p++;
					}
					
					write_macro(o,macro);
				}
				else
				if (check(&p,"__TOC__"))
				{
					write_toc(o,path_and_filename_wbuf);
				}
				else
				if (check(&p,"__RTL_BEGIN__"))
				{
					fprintf(o,"<div style=\"direction:rtl;text-align:right;\">\r\n");
				}
				else
				if (check(&p,"__RTL_END__"))
				{
					fprintf(o,"</div>\r\n");
				}
				else
				if (check(&p,"<pre>"))
				{
					in_pre = 1;
					fprintf(o,"<pre>");
				}
				else
				if (check(&p,"<beta>"))
				{
//					fprintf(o,"<div class=\"beta\">Requires Everything 1.4</div>\r\n");
				}
				else
				if (check(&p,"<dl>"))
				{
					in_dl++;
					fprintf(o,"<dl>\r\n");
				}
				else
				if (check(&p,"<ul>"))
				{
					in_ul++;
					fprintf(o,"<ul>\r\n");
				}
				else
				{
					d = expanded;
					
					while(*p)
					{
						if (check(&p,"<ul>"))
						{
							d = cat(d,"<ul>");
						}
						else
						if (check(&p,"</ul>"))
						{
							d = cat(d,"</ul>");
						}
						else
						if (check(&p,"<code>"))
						{
							d = cat(d,"<code>");
						}
						else
						if (check(&p,"</code>"))
						{
							d = cat(d,"</code>");
						}
						else
						if (check(&p,"<br"))
						{
							d = cat(d,"<br/>");
							
							while(*p)
							{	
								if (*p == '>')
								{
									*p++ = 0;
									break;
								}

								p++;
							}
						}
						else
						if (check(&p,"<img"))
						{
							const char *start;
							
							d = cat(d,"<img");
							
							start = p;
							
							while(*p)
							{	
								if (*p == '>')
								{
									*p++ = 0;
									break;
								}

								p++;
							}

							d = cat(d,start);
							d = cat(d,">");
						}
						else					
						if (check(&p,"'''''"))
						{
							is_italic = !is_italic;
							is_bold = !is_bold;
							
							d = cat(d,is_bold?"<b><i>":"</i></b>");
						}
						else							
						if (check(&p,"'''"))
						{
							is_bold = !is_bold;
							
							d = cat(d,is_bold?"<b>":"</b>");
						}
						else							
						if (check(&p,"''"))
						{
							is_italic = !is_italic;
							
							d = cat(d,is_italic?"<i>":"</i>");
						}
						else							
						if (check(&p,"[[File:"))
						{
							char *url;
							char *text;
							char localurl[MAX_PATH];
							
							url = p;
							text = 0;
							
							while(*p)
							{
								if ((*p == ']') && (p[1] == ']')) 
								{
									*p = 0;
									p += 2;
									break;
								}
								else
								if ((*p == '|') && (p[1] == 'a') && (p[2] == 'l') && (p[3] == 't') && (p[4] == '='))
								{
									*p = 0;
									p+=5;
									text = p;
								}								
								
								p++;
							}
							
							d = cat(d,"<img src=\"");
							
							makelocalurl(localurl,url);
							d = cat(d,localurl);

							d = cat(d,"\"");

							if (text)
							{
								d = cat(d," alt=\"");
								d = cat(d,text);
								d = cat(d,"\"");
							}
							
							d = cat(d," />");
						}
						else		
						if ((*p == '[') && (p[1] == '['))
						{	
							char *url;
							char *text;
							char localurl[MAX_PATH];
							
							p += 2;
							
							url = p;
							text = 0;
							
							while(*p)
							{
								if ((*p == ']') && (p[1] == ']')) 
								{
									*p = 0;
									p += 2;
									break;
								}
								else
								if (*p == '|')
								{
									*p = 0;
									p++;
									text = p;
								}								
								
								p++;
							}
							
							if (!text)
							{
								if (!is_url_protocol(url))
								{
									char *last;
									char *p2;
									
									last = 0;
									
									p2 = url;
									while(*p2)
									{
										if ((*p2 == '/') && (p2[1]))
										{
											last = p2+1;
										}

										p2++;
									}
									
									text = last;
								}
							}

							d = cat(d,"<a href=\"");
							
							makelocalurl(localurl,url);
							d = cat(d,localurl);

							url_add(path_and_filename_wbuf,line,localurl);

							d = cat(d,"\">");

							if (text)
							{
								d = cat(d,text);
							}
							else
							{
								d = cat(d,localurl);
							}
							
							d = cat(d,"</a>");
						}
						else
						if (*p == '<')
						{
							*d++ = '&';
							*d++ = 'l';
							*d++ = 't';
							*d++ = ';';
							p++;
						}
						else
						if (*p == '>')
						{
							*d++ = '&';
							*d++ = 'g';
							*d++ = 't';
							*d++ = ';';
							p++;
						}
						else
						if (*p == '&')
						{
							*d++ = '&';
							*d++ = 'a';
							*d++ = 'm';
							*d++ = 'p';
							*d++ = ';';
							p++;
						}
						else
						{
							*d++ = *p;
							p++;
						}
					}
					*d = 0;
					
					p = expanded;
					
					if (*p == '{')
					{
						p++;

						fprintf(o,"<table>\r\n<tr>");
						first_td = 1;
					}
					else
					if (*p == '|')
					{
						p++;
						if (check(&p,"rowspan=\""))
						{
							int rowspan;
							
							rowspan=atoi(p);
							
							while(*p)
							{
								if (*p == '|') 
								{
									p++;

									fprintf(o,"<td rowspan=\"%d\">%s</td>",rowspan,p);
									
									break;
								}
								p++;
							}
						}
						else
						if (*p == '-')
						{
							fprintf(o,"</tr>\r\n<tr>");
							first_td = 1;
						}
						else
						if (*p == '}')
						{
							fprintf(o,"</tr>\r\n</table>\r\n");
						}
						else
						if (*p == ' ')
						{
							p++;
							if (first_td)
							{
								fprintf(o,"<td class=\"wikinowrap\">%s</td>",p);
								first_td = 0;
							}
							else
							{
								fprintf(o,"<td>%s</td>",p);
							}
						}
					}
					else
					if (*p == '!')
					{
						p++;
						if (*p == ' ')
						{
							p++;
							fprintf(o,"<th class=\"wikinowrap\">%s</th>",p);
						}
					}
					else
					if (*p == ';')
					{
						char aname[256];

						p++;
						
						getaname(aname,p);
						
						if (in_dd)
						{
							fprintf(o,"</dd>\r\n");
							in_dd = 0;
						}
						/*
						if (id_find(aname))
						{
							char tempbuf[1024];
							
							strcpy(tempbuf,id_last_h);
							strcat(tempbuf,"_");
							strcat(tempbuf,aname);
							strcpy(aname,tempbuf);
						}
*/
						id_add(aname);
						
						// skip past |
						{
							char *p2;
							
							p2 = p;
							
							while(*p2)
							{
								if (*p2 == '|')
								{
									p = p2 + 1;
									break;
								}
								
								p2++;
							}
						}
						
						fprintf(o,"<dt id=\"%s\"><p>%s</p></dt>\r\n",aname,p);

						known_url_add(known_url_buf,aname,1);
					}
					else
					if ((*p == '_') && (p[1] == '_')) 
					{
						// __TOC__
					}
					else
					if ((*p == '=') && (p[1] == '='))
					{
						int depth;
						char *start;
						char aname[MAX_PATH];
						
						p+=2;
						depth = 0;
						
						while(*p)
						{
							if (*p != '=') break;
							
							depth++;
							p++;
						}
						
						start = p;
						
						while(*p)
						{
							if (*p == '=') break;

							p++;
						}
						
						*p = 0;
						
						getaname(aname,start);
						
						id_add(aname);
						strcpy(id_last_h,aname);
						fprintf(o,"<h2 id=\"%s\">%s</h2>\r\n",aname,start);

						known_url_add(known_url_buf,aname,1);
					}
					else
					if (*p == '=')
					{
						char *start;
						char aname[MAX_PATH];
						
						p+=1;

						start = p;
						
						while(*p)
						{
							if (*p == '=') break;

							p++;
						}
						
						*p = 0;

						getaname(aname,start);
						
						id_add(aname);
						strcpy(id_last_h,aname);
						fprintf(o,"<h1 id=\"%s\">%s</h1>\r\n",aname,start);

						known_url_add(known_url_buf,aname,1);
					}
					else
					if (*p == '*')
					{
						p+=1;

						if (in_li[in_ul])
						{
							fprintf(o,"</li>\r\n");
							in_li[in_ul] = 0;
						}

						fprintf(o,"<li>");
						in_li[in_ul] = 1;

						fprintf(o,"<p>%s</p>",p);
//						fprintf(o,"%s",p);
					}
					else						
					{
						p = skipws(p);
					
						if (*p)
						{
							// p
							fprintf(o,"<p>%s</p>\r\n",p);
						}
						else
						{
							fprintf(o,"<br/>\r\n");
						}
					}
				}
			}
		}
		
		free(buf);
	
		fclose(f);
	}
}

void write_template(const char *html_filename,const char *template_filename,int template_id,const char *title,int page)
{
	FILE *o;
	wchar_t path_and_filename_wbuf[MAX_PATH];
	wchar_t filename_wbuf[MAX_PATH];
	char path_and_filename_utf8[MAX_PATH];

	wchar_copy_utf8(filename_wbuf,template_filename ? template_filename : strings[template_id]);
	wsprintf(path_and_filename_wbuf,L"%s\\%s",language_subfolder,filename_wbuf);
	
	if (GetFileAttributes(path_and_filename_wbuf) != INVALID_FILE_ATTRIBUTES)
	{
		id_clear();

		// known url.
		{
			sprintf(known_url_buf,"%s/%s",url_path_local,template_filename ? template_filename : strings[template_id]);
			
			utf8_remove_extension(known_url_buf);
			
			known_url_add(known_url_buf,0,1);
		}
		
		o = begin_page(html_filename,template_filename,template_id,title,page);
		
		utf8_copy_wchar(path_and_filename_utf8,path_and_filename_wbuf);
		
		write_template_file(o,path_and_filename_utf8);

		end_page(o,html_filename,template_filename,template_id);
	}
}

static char *skip_utf8_bom(char *p)
{
	if (((*(unsigned char *)p) == 0xEF) && (((unsigned char *)p)[1] == 0xBB) && (((unsigned char *)p)[2] == 0xBF))
	{
		return p + 3;
	}
	
	return p;
}					

static void write_toc(FILE *o,const wchar_t *path_and_filename_wbuf)
{
	FILE *f;
	
	fprintf(o,"<div class=\"toc\">\r\n");
	fprintf(o,"<ul>\r\n");
	
	f = _wfopen(path_and_filename_wbuf,L"rb");
	if (f)
	{
		char *buf;
		int got_toc;
		
		buf = malloc(65536);
		got_toc = 0;

		while(fgets(buf,65536,f))
		{
			char *p;
				
			p = skip_utf8_bom(buf);
				
			while(*p)
			{
				if ((*p == '\r') && (p[1] == '\n')) break;
				if (*p == '\n') break;
				
				p++;
			}
				
			*p = 0;

			p = skip_utf8_bom(buf);
			
			if ((*p == '_') && (p[1] == '_'))
			{
				got_toc = 1;
			}
			else
			if (got_toc)
			{
				if ((*p == '=') && (p[1] == '='))
				{
					int depth;
					char *start;
					char aname[MAX_PATH];
					
					p+=2;
					depth = 0;
					
					while(*p)
					{
						if (*p != '=') break;
						
						depth++;
						p++;
					}
					
					start = p;
					
					while(*p)
					{
						if (*p == '=') break;

						p++;
					}
					
					*p = 0;
					
					getaname(aname,start);
					
					strcpy(id_last_h,aname);

					fprintf(o,"<li class=\"toclvl2\"><p><a href=\"#%s\">%s</a></p></li>\r\n",aname,start);
				}
				else
				if (*p == '=')
				{
					char *start;
					char aname[MAX_PATH];
					
					p+=1;

					start = p;
					
					while(*p)
					{
						if (*p == '=') break;

						p++;
					}
					
					*p = 0;

					getaname(aname,start);
					
					strcpy(id_last_h,aname);

					fprintf(o,"<li class=\"toclvl1\"><p><a href=\"#%s\">%s</a></p></li>\r\n",aname,start);
				}
			}
		}
		
		free(buf);
	
		fclose(f);
	}

	fprintf(o,"</ul>\r\n");
	fprintf(o,"</div>\r\n");
}

static void get_template_url(char *buf,int id)
{	
	char *p;
	char *last;
	
	sprintf(buf,"%s/%s",url_path_local,strings[id]);
	
	last = 0;
	
	p = buf;
	while(*p)
	{
		if (*p == '.')
		{
			last = p;
		}
		
		p++;
	}
	
	if (last)
	{
		*last = 0;
	}
}

static void write_macro(FILE *o,char *code)
{
	if (stricmp(code,"SCREENSHOT_BEGIN") == 0)
	{
		char support_url_buf[MAX_PATH];
		
		get_link(support_url_buf,PAGE_SUPPORT);
		
		//FIXME: make overlapped left div	
		fprintf(o,"<div class=\"screenshot\">\r\n");
		if (stricmp(language_code,"es-es") == 0)
		{
			resource_add("sssmall2.gif");
			fprintf(o,"<a href=\"%s\"><img alt=\"Everything\" height=215 src=\"%s/es-es/sssmall2.gif\" width=277 /></a>\r\n",support_url_buf,url_path_root);
		}
		else
		{
			fprintf(o,"<a href=\"%s\"><img alt=\"Everything\" height=215 src=\"%s/sssmall2.gif\" width=277 /></a>\r\n",support_url_buf,url_path_root);
		}
		
		fprintf(o,"</div>\r\n");
		fprintf(o,"<div>\r\n");
	}
	else
	if (stricmp(code,"SCREENSHOT_END") == 0)
	{
		//FIXME: make overlapped left div	
		fprintf(o,"</div>\r\n");
		fprintf(o,"<div style=\"clear:both\">\r\n");
		fprintf(o,"</div>\r\n");
	}
	else
	if (stricmp(code,"DOWNLOAD_EVERYTHING") == 0)
	{
		box_dl(o);
	}
	else
	if (stricmp(code,"DOWNLOAD_EVERYTHING_BETA") == 0)
	{
		box_beta(o);
	}	
	else
	if (stricmp(code,"DOWNLOAD_ALL_EVERYTHING") == 0)
	{
		box_all_dl(o);
	}	
	else
	if (stricmp(code,"DOWNLOAD_EVERYTHING_LANGUAGE_PACK") == 0)
	{
		box_language(o);
	}	
	else
	if (stricmp(code,"DOWNLOAD_EVERYTHING_COMMAND_LINE_INTERFACE") == 0)
	{
		box_cli(o);
	}	
	else
	if (stricmp(code,"DOWNLOAD_EVERYTHING_SDK") == 0)
	{
		box_sdk(o);
	}	
	else
	if (stricmp(code,"DOWNLOAD_EVERYTHING_OFFLINE_HELP") == 0)
	{
		box_offline_help(o);
	}	
	else
	if (stricmp(code,"CONTACT_FORM") == 0)
	{
		fprintf(o,"<form action=\"%s/sendemail.php\" method=\"post\">",url_path_local);
		fprintf(o,"<p>");
		fprintf(o,"%s<br/>",strings[STRING_ID_CONTACT_FORM_MESSAGE]);
		fprintf(o,"<textarea name=\"message\" cols=\"40\" rows=\"7\" style=\"width:100%%;\"></textarea>");
		fprintf(o,"</p>");
		fprintf(o,"<p>");

		fprintf(o,"<br/>");
		fprintf(o,"%s<br/>",strings[STRING_ID_CONTACT_FORM_EMAIL]);
		fprintf(o,"<input type=\"text\" name=\"email\" size=\"25\" maxlength=\"100\" style=\"width:40%%;\" />");
		fprintf(o,"</p>");
		fprintf(o,"<p>");
		//        fprintf(o,"<input type=\"hidden\" name=\"rubrik\" value=\"voidtools.com void\" />");
		fprintf(o,"<br/>");
		fprintf(o,"<input type=\"submit\" value=\"%s\" style=\"width:80px;\" />",strings[STRING_ID_CONTACT_FORM_SEND]);
		fprintf(o,"</p>");

		fprintf(o,"</form>");
	}	
	else
	if (stricmp(code,"DONATE_FORM") == 0)
	{
		char string_buf[MAX_PATH];
		char url_buf[MAX_PATH];
	
		fprintf(o,"<form name=\"_donations\" action=\"https://www.paypal.com/us/cgi-bin/webscr\" method=\"post\">");
		fprintf(o,"<input type=\"hidden\" name=\"cmd\" value=\"_donations\">");
		fprintf(o,"<input type=\"hidden\" name=\"business\" value=\"david@voidtools.com\">");
		
		if (stricmp(language_code,"en-au") == 0)
		{
			fprintf(o,"<input type=\"hidden\" name=\"currency_code\" value=\"AUD\">");
		}
		else
		if (stricmp(language_code,"en-uk") == 0)
		{
			fprintf(o,"<input type=\"hidden\" name=\"currency_code\" value=\"GBP\">");
		}
		else
		{
			fprintf(o,"<input type=\"hidden\" name=\"currency_code\" value=\"USD\">");
		}
		
		fprintf(o,"<input type=\"hidden\" name=\"item_name\" value=\"Everything\">");
		fprintf(o,"<input type=\"hidden\" name=\"no_shipping\" value=\"1\">");
		
		// hard coded donated redirect
		strcpy(string_buf,strings[STRING_ID_DONATED_TEMPLATE]);
		utf8_remove_extension(string_buf);
		strcpy(url_buf,"http://www.voidtools.com");
		if (*language_code)
		{
			strcat(url_buf,"/");
			strcat(url_buf,language_code);
		}

		strcat(url_buf,"/");
		strcat(url_buf,string_buf);
		
		fprintf(o,"<input type=\"hidden\" name=\"return\" value=\"%s\">",url_buf);
		
//		fprintf(o,"<input type=\"hidden\" name="amount" value="10.00">");

		fprintf(o,"<p><input type=\"hidden\" name=\"on0\" value=\"Name\">");
			fprintf(o,"%s<br/>",strings[STRING_ID_DONATE_FORM_NAME]);
			fprintf(o,"<input type=\"text\" name=\"os0\">");
		fprintf(o,"</p>");
		fprintf(o,"<br/>");

		fprintf(o,"<p><input type=\"hidden\" name=\"on1\" value=\"Comment\" maxlength=\"200\">");
        fprintf(o,"%s<br/>",strings[STRING_ID_DONATE_FORM_COMMENT]);
		fprintf(o,"<textarea maxlength=\"200\" cols=\"40\" rows=\"7\" style=\"width:100%%;\" name=\"os1\"></textarea>");
		fprintf(o,"</p>");
		fprintf(o,"<br/>");

		makelocalurl(string_buf,strings[STRING_ID_DONATE_FORM_BUTTON_IMAGE]);
		
		fprintf(o,"<input type=\"image\" src=\"%s\" border=\"0\" name=\"submit\" alt=\"%s\">",string_buf,strings[STRING_ID_DONATE_FORM_DONATE]);
		fprintf(o,"</form>");
		fprintf(o,"<br/>");
		fprintf(o,"<br/>");

		fprintf(o,"<p><img style=\"margin-right:4px;\" alt=\"Bitcoin\" src=\"%s/bitcoin.png\" height=\"16\" width=\"16\" >Bitcoin: 1GDqoGKF4jNwWJ6ZZA7WuSpYjJ7QRD3451</p>",url_path_root);
		fprintf(o,"<p><img style=\"margin-right:4px;\" alt=\"Ethereum\" src=\"%s/eth.png\" height=\"16\" width=\"16\" >Ethereum: 0x5cd6d4d41f111a97b816cbfce9b89ff314eaed48</p>",url_path_root);
		fprintf(o,"<p><img style=\"margin-right:4px;\" alt=\"Ethereum Classic\" src=\"%s/eth-classic.png\" height=\"16\" width=\"16\" >Eth-Classic: 0x6a7907fe0a93ab6c53ea4277d3383dfd4a9139cc</p>",url_path_root);
		fprintf(o,"<p><img style=\"margin-right:4px;\" alt=\"Litecoin\" src=\"%s/litecoin.png\" height=\"16\" width=\"16\" >Litecoin: LRqzopB3pmJPiFkUStM5GJfBx16tz8dfy4</p>",url_path_root);
		fprintf(o,"<p><img style=\"margin-right:4px;\" alt=\"Bitcoin Cash\" src=\"%s/bch.png\" height=\"16\" width=\"16\" >Bitcoin Cash: 1GDqoGKF4jNwWJ6ZZA7WuSpYjJ7QRD3451</p>",url_path_root);
		fprintf(o,"<p><img style=\"margin-right:4px;\" alt=\"Ripple\" src=\"%s/ripple.png\" height=\"16\" width=\"16\" >Ripple: rJBQASsryE7X3TCTVgCGbEtcGhtryPruVB</p>",url_path_root);
	}	
	else
	if (stricmp(code,"DONATE_HISTORY") == 0)
	{
		fprintf(o,"<table class=\"donatehistorytable\" width=\"100%%\">\r\n");
		fprintf(o,"<tr><th width=\"20%%\" >%s</th><th width=\"20%%\" >%s</th><th width=\"20%%\" >%s</th><th width=\"20%%\" align=\"right\" >%s</th></tr>\r\n",strings[STRING_ID_DONATE_HISTORY],strings[STRING_ID_DONATE_HISTORY_NAME],strings[STRING_ID_DONATE_HISTORY_COMMENT],strings[STRING_ID_DONATE_HISTORY_AMOUNT]);
			
		{
			FILE *donationf;
		
			donationf = fopen("donations.csv","rb");
			if (donationf)
			{
				char date[256];
				char amount[256];
				char comment[4096];
				char name[256];
				char *buf;
				
				buf = malloc(65536);
				
				// skip header.				
				fgets(buf,65536,donationf);
				
				while(fgets(buf,65536,donationf))
				{
					char *p;
					
					p = skip_utf8_bom(buf);
					
					p = makevoidtools_get_csv_value(date,p);
					p = makevoidtools_get_csv_value(name,p);
					p = makevoidtools_get_csv_value(comment,p);
					p = makevoidtools_get_csv_value(amount,p);
					
					if ((*date) && (*amount))
					{
						fprintf(o,"<tr><td width=\"20%%\" >%s</td><td width=\"20%%\" >%s</td><td width=\"40%%\" >%s</td><td width=\"20%%\" align=\"right\">%s</td></tr>\r\n",date,*name ? name : "Anonymous",comment,amount);
					}
				}

				free(buf);
				fclose(donationf);
			}
		}
		
		fprintf(o,"</table>\r\n");
	}	
	else
	if (stricmp(code,"LANGUAGES") == 0)
	{
		fprintf(o,"<ul>\r\n");
		{
			language_t *l;
			
			l = language_start;
			while(l)
			{
				fprintf(o,"<li><p><a href=\"%s/%s\">%s</p></li>\r\n",url_path_root,l->code,l->name);
				
				l = l->next;
			}
		}
		fprintf(o,"</ul>\r\n");
	}
	else
	if (stricmp(code,"SUPPORTED_LANGUAGES") == 0)
	{
		FILE *supported_languages_f;
	
		supported_languages_f = fopen("supported_languages.csv","rb");
		if (supported_languages_f)
		{
			char Language[256];
			char Translator[256];
			char Version[256];
			char *buf;
			int is_tr;
			
			buf = malloc(65536);
			
			// skip header.				
			fgets(buf,65536,supported_languages_f);
			
			is_tr = 1;
			
			while(fgets(buf,65536,supported_languages_f))
			{
				char *p;
				
				p = skip_utf8_bom(buf);
				
				p = makevoidtools_get_csv_value(Language,p);
				p = makevoidtools_get_csv_value(Translator,p);
				p = makevoidtools_get_csv_value(Version,p);
				
				if (*Language)
				{
					if (is_tr)
					{
					}
					else
					{
						fprintf(o,"</tr>\r\n");
						fprintf(o,"<tr>\r\n");
					}
					
					expand_url(Translator);

					fprintf(o,"<td class=\"wikinowrap\">%s</td><td>%s</td><td>%s</td>\r\n",Language,Translator,Version);

					is_tr = 0;
				}
			}

			free(buf);
			fclose(supported_languages_f);
		}
	}
	else
	if (stricmp(code,"PREVIOUS_STABLE_RELEASES") == 0)
	{
		FILE *csvf;
	
		csvf = fopen("previous_stable_releases.csv","rb");
		if (csvf)
		{
			char link[256];
			char type[256];
			char machine_target[256];
			char language[256];
			char size[256];
			char *buf;
			int is_tr;
			
			buf = malloc(65536);
			
			// skip header.				
			fgets(buf,65536,csvf);
			
			is_tr = 1;
			
			while(fgets(buf,65536,csvf))
			{
				char *p;
				
				p = skip_utf8_bom(buf);
				
				p = makevoidtools_get_csv_value(link,p);
				p = makevoidtools_get_csv_value(type,p);
				p = makevoidtools_get_csv_value(machine_target,p);
				p = makevoidtools_get_csv_value(language,p);
				p = makevoidtools_get_csv_value(size,p);
				
				if (*link)
				{
					if (is_tr)
					{
					}
					else
					{
						fprintf(o,"</tr>\r\n");
						fprintf(o,"<tr>\r\n");
					}
					
					expand_url(link);

					fprintf(o,"<td class=\"wikinowrap\">%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td>\r\n",link,type,machine_target,language,size);

					is_tr = 0;
				}
			}

			free(buf);
			fclose(csvf);
		}
	}	
	else
	if (stricmp(code,"PREVIOUS_VERSIONS") == 0)
	{
		write_template_file(o,"{{PREVIOUS_VERSIONS}}.txt");
	}
	else
	if (stricmp(code,"PRE_EXAMPLE") == 0)
	{
		fprintf(o,"<pre>\r\n");
		fprintf(o,"&lt;pre&gt;\r\n");
		fprintf(o,"int i;\r\n");
		fprintf(o,"for(i=0;i&lt;10;i++)\r\n");
		fprintf(o,"{\r\n");
		fprintf(o,"\tprintf(\"hello %%d\\n\",i);\r\n");
		fprintf(o,"}\r\n");
		fprintf(o,"&lt;/pre&gt;\r\n");
		fprintf(o,"</pre>\r\n");
	}
}

static void fix_hash_ref(char *buf)
{
	char *p;
	char *d;
	char tempbuf[MAX_PATH];
	
	p = buf;
	d = tempbuf;
	
	while(*p)
	{
		if (*p == '#')
		{
			*d++ = '#';
			p++;
			
			while(*p)
			{
				if (*p < 0)
				{
					*d++ = *p;
				}
				else
				if ((*p >= 'A') && (*p <= 'Z'))
				{
					*d++ = *p - 'A' + 'a';
				}
				else
				if ((*p >= 'a') && (*p <= 'z'))
				{
					*d++ = *p;
				}
				else
				if ((*p >= '0') && (*p <= '9'))
				{
					*d++ = *p;
				}
				else
				if (*p == '-')
				{
					*d++ = *p;
				}
				else
				if (*p == '\'')
				{
					// ignore the ' in what's
				}
				else
				if (*p == '_')
				{
					*d++ = *p;
				}
				else
				{
					if ((d > tempbuf) && (d[-1] != '_')&& (d[-1] != '#'))
					{
						*d++ = '_';
					}
				}
				
				p++;
			}

			while(d > tempbuf)
			{
				if (d[-1] != '_')
				{
					break;
				}

				d--;
			}
			
			break;
		}
		
		*d++ = *p;
		p++;
	}
	
	*d = 0;
	
	strcpy(buf,tempbuf);
}

static void fix_wiki_url_case(char *buf)
{
	char *p;
	char *d;
	char tempbuf[MAX_PATH];
	int didsupport;
	wiki_t *parent;
	
	// look for support/Everything/<wikipage>
	p = buf;
	d = tempbuf;
	didsupport = 0;
	parent = 0;
	
	while(*p)
	{
		char subpath[MAX_PATH];
		char *subpathd;
		int was_forward_slash;
		int was_hash;
		
		subpathd = subpath;
		was_forward_slash = 0;
		was_hash = 0;
		
		while(*p)
		{
			if (*p == '/')
			{
				was_forward_slash = 1;
				p++;
				
				break;
			}
			
			if (*p == '#')
			{
				was_hash = 1;
				p++;
				
				break;
			}
			
			*subpathd++ = *p;
			p++;
		}

		*subpathd = 0;
		
		{
			const char *bestsubpath;
			const char *p2;
			char fixedname[MAX_PATH];
			
			bestsubpath = subpath;
			
			if (*subpath)
			{
				if (didsupport)
				{
					wiki_t *w;
					
					// find wiki from parent.
					w = wiki_find(parent,subpath);
					if (w)
					{
						hashref(fixedname,w->name,0);
						bestsubpath = fixedname;
						
						parent = w;
					}
					else
					{
//						printf("%S: warning: unknown wiki subpath %s in url %s\n",language_subfolder,subpath,buf);
//						warnings++;
						
						return;
					}
				}
				else
				{
					if (stricmp(subpath,strings[STRING_ID_SUPPORT_FOLDER]) == 0)
					{
						bestsubpath = strings[STRING_ID_SUPPORT_FOLDER];
					}
					else
					{
						return;
					}
					
					didsupport = 1;
				}
				
				p2 = bestsubpath;
				while(*p2)
				{
					*d++ = *p2;
					p2++;
				}
			}
			
			if (was_forward_slash)
			{
				*d++ = '/';
			}
			if (was_hash)
			{
				*d++ = '#';
				d = cat(d,p);
				break;
			}
		}
	}
	
	*d = 0;
	
	strcpy(buf,tempbuf);	
}

static void makelocalurl(char *buf,const char *url)
{
	char *d;
	char fixed_wiki_url[MAX_PATH];
	
	strcpy(fixed_wiki_url,url);

	fix_wiki_url_case(fixed_wiki_url);

	d = buf;
	
	if (is_absolute_url(fixed_wiki_url))
	{
		d = cat(d,fixed_wiki_url);
	}
	else
	{
		add_resource(fixed_wiki_url);
	
		d = cat(d,url_path_local);
		d = cat(d,"/");
		d = cat(d,fixed_wiki_url);
	}
	
	*d = 0;

	fix_hash_ref(buf);
}

static void copy_local_file(const char *filename)
{
	wchar_t filename_wbuf[MAX_PATH];
	wchar_t path_and_filename_wbuf[MAX_PATH];
	wchar_t dst[MAX_PATH];
	
	wchar_copy_utf8(filename_wbuf,filename);
	wsprintf(path_and_filename_wbuf,L"%s\\%s",language_subfolder,filename_wbuf);

	wsprintf(dst,L"%s\\%s",file_path_local,filename_wbuf);
	
	if (!CopyFile(path_and_filename_wbuf,dst,FALSE))
	{
		printf("%S: error: unable to copy file %s: %d\n",language_subfolder,filename,GetLastError());
		
		errors++;
	}
}

static char *skipws(char *p)
{
	while(*p)
	{
		if (!isws(*p))
		{
			break;
		}
		
		p++;
	}
	
	return p;
}

static wiki_t *wiki_find(wiki_t *parent,const char *name)
{
	wiki_t *w;
	
	w = wiki_start;
	while(w)
	{
		if (w->parent == parent)
		{
			if (stricmp(w->name,name) == 0)
			{
				return w;
			}
			
			if (stricmp(w->hashref_fixed_name,name) == 0)
			{
				return w;
			}
		}
		
		w = w->next;
	}
	
	return 0;
}

static void add_resource(const char *url)
{
	char filename[MAX_PATH];
	const char *ext;
	
	ext = 0;
	
	{
		const char *p;
		p = url;
		while(*p)
		{
			if (*p == '/')
			{
				ext = 0;
			}
			else
			if (*p == '.')
			{
				ext = p;
				break;
			}
			
			p++;
		}
	}
	
	// url to path.
	if (ext)
	{
		const char *p;
		char *d;
		
		d = filename;
		p = url;
		
		while(*p)	
		{
			if (*p == '/')
			{
				*d++ = '\\';
			}
			else
			{
				*d++ = *p;
			}
			
			p++;
		}
		*d = 0;
		
		resource_add(filename);
	}
}

static int should_add_url(const char *p)
{	
	if (*p == '/')
	{
		p++;
	}
	
	while(*p)
	{
		if (*p == '.')
		{
			return 0;
		}
		
		p++;
	}
	
	return 1;
}

static void url_add(const wchar_t *filename,int line,const char *url_text)
{
	char *p;
	
	p = url_text;
	
	if (check(&p,url_path_root))
	{
		// skip url path root.
	}

	if (!is_url_protocol(p))
	{
		if (should_add_url(p))
		{
			url_t *url;
			
			url = malloc(sizeof(url_t));
			
			strcpy(url->url,p);
			wcscpy(url->filename,filename);
			url->line = line;
			
			if (url_start)
			{
				url_last->next = url;
			}
			else
			{
				url_start = url;
			}
			
			url->next = 0;
			url_last = url;
		}
	}
}

static known_url_t *find_known_url(const char *url)
{
	known_url_t *ku;
	
	ku = known_url_start;
	while(ku)
	{
		if (strcmp(ku->url,url) == 0)
		{
			return ku;
		}
		
		ku = ku->next;
	}
	
	return 0;
}

static known_url_t *known_url_add(const char *url,const char *hash,int add_slash)
{
	known_url_t *ku;
	char buf[1024];
	char *p;
	
	p = url;
	
	if (check(&p,url_path_root))
	{
		// skip url path root.
	}
	
	if (add_slash)
	{
		strcpy(buf,p);
		strcat(buf,"/");
		
		known_url_add(buf,hash,0);
	}
	
	ku = malloc(sizeof(known_url_t));
	if (!ku)
	{
		printf("out of memory\n");
		
		ExitProcess(0);
	}
	
	strcpy(buf,p);
	if (hash)
	{
		strcat(buf,"#");
		strcat(buf,hash);
	}
	
	strcpy(ku->url,buf);
	
	if (known_url_start)
	{
		known_url_last->next = ku;
	}
	else
	{
		known_url_start = ku;
	}
	
	known_url_last = ku;
	ku->next = 0;
	
//	printf("add known %s\n",buf);
	
	return ku;
}

static void url_clear(void)
{
	url_t *u;
	
	u = url_start;
	while(u)
	{
		url_t *next_u;
		
		next_u = u->next;
		
		free(u);
		
		u = next_u;
	}
	
	url_start = 0;
	url_last = 0;
}

static void known_url_clear(void)
{
	known_url_t *ku;
	
	ku = known_url_start;
	while(ku)
	{
		known_url_t *next_ku;
		
		next_ku = ku->next;
		
		free(ku);
		
		ku = next_ku;
	}
	
	known_url_start = 0;
	known_url_last = 0;
}

static wchar_t *wchar_file_part(wchar_t *p)
{
	wchar_t *last;
	
	last = p;
	
	while(*p)
	{	
		if (*p == '\\')
		{
			last = p + 1;
		}
		
		p++;
	}
	
	return last;
}

static void get_wiki_title(char *buf,const wchar_t *filename)
{
	FILE *f;
	const wchar_t *last;
	const wchar_t *p;
	
	last = filename;
	p = filename;
	while(*p)
	{
		if (*p == '\\')
		{
			last = p + 1;
		}
		
		p++;
	}
		
	utf8_copy_wchar(buf,last);
	utf8_remove_extension(buf);
		
	f = _wfopen(filename,L"rb");
	if (f)
	{
		char line_buf[4096];
		
		while(fgets(line_buf,4096,f))
		{
			char *p;
			
			p = skip_utf8_bom(line_buf);
			
			if ((*p == '=') && (p[1] != '='))
			{
				char *start;
				
				p++;
				
				start = p;
				
				while(*p)
				{
					if (*p == '=')
					{
						break;
					}
					p++;
				}
				*p = 0;

//				printf("%s found h %s\n",language_code,start);
					
				strcpy(buf,start);
				
				break;
			}
		}
		
		fclose(f);
	}
}

