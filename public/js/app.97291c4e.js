(function(t){function e(e){for(var r,u,i=e[0],c=e[1],s=e[2],d=0,l=[];d<i.length;d++)u=i[d],Object.prototype.hasOwnProperty.call(o,u)&&o[u]&&l.push(o[u][0]),o[u]=0;for(r in c)Object.prototype.hasOwnProperty.call(c,r)&&(t[r]=c[r]);f&&f(e);while(l.length)l.shift()();return a.push.apply(a,s||[]),n()}function n(){for(var t,e=0;e<a.length;e++){for(var n=a[e],r=!0,u=1;u<n.length;u++){var c=n[u];0!==o[c]&&(r=!1)}r&&(a.splice(e--,1),t=i(i.s=n[0]))}return t}var r={},o={app:0},a=[];function u(t){return i.p+"js/"+({dashboard:"dashboard","forgot-password~login~register~user":"forgot-password~login~register~user","forgot-password":"forgot-password",login:"login",register:"register",user:"user",home:"home","not-found":"not-found","reset-password":"reset-password",users:"users"}[t]||t)+"."+{dashboard:"b56292b3","forgot-password~login~register~user":"367af187","forgot-password":"3bc96108",login:"732526ec",register:"d904b27b",user:"4f70b106",home:"505f6ab4","not-found":"c853eda5","reset-password":"81abf779",users:"11a65f94"}[t]+".js"}function i(e){if(r[e])return r[e].exports;var n=r[e]={i:e,l:!1,exports:{}};return t[e].call(n.exports,n,n.exports,i),n.l=!0,n.exports}i.e=function(t){var e=[],n=o[t];if(0!==n)if(n)e.push(n[2]);else{var r=new Promise((function(e,r){n=o[t]=[e,r]}));e.push(n[2]=r);var a,c=document.createElement("script");c.charset="utf-8",c.timeout=120,i.nc&&c.setAttribute("nonce",i.nc),c.src=u(t);var s=new Error;a=function(e){c.onerror=c.onload=null,clearTimeout(d);var n=o[t];if(0!==n){if(n){var r=e&&("load"===e.type?"missing":e.type),a=e&&e.target&&e.target.src;s.message="Loading chunk "+t+" failed.\n("+r+": "+a+")",s.name="ChunkLoadError",s.type=r,s.request=a,n[1](s)}o[t]=void 0}};var d=setTimeout((function(){a({type:"timeout",target:c})}),12e4);c.onerror=c.onload=a,document.head.appendChild(c)}return Promise.all(e)},i.m=t,i.c=r,i.d=function(t,e,n){i.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:n})},i.r=function(t){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},i.t=function(t,e){if(1&e&&(t=i(t)),8&e)return t;if(4&e&&"object"===typeof t&&t&&t.__esModule)return t;var n=Object.create(null);if(i.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var r in t)i.d(n,r,function(e){return t[e]}.bind(null,r));return n},i.n=function(t){var e=t&&t.__esModule?function(){return t["default"]}:function(){return t};return i.d(e,"a",e),e},i.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},i.p="/",i.oe=function(t){throw console.error(t),t};var c=window["webpackJsonp"]=window["webpackJsonp"]||[],s=c.push.bind(c);c.push=e,c=c.slice();for(var d=0;d<c.length;d++)e(c[d]);var f=s;a.push([0,"chunk-vendors"]),n()})({0:function(t,e,n){t.exports=n("56d7")},"034f":function(t,e,n){"use strict";n("85ec")},"2fa3":function(t,e,n){"use strict";n.d(e,"a",(function(){return r}));n("b0c0");var r=function(t){var e="Error, please try again.";return"Fetch User"===t.name?t.message:t.response?t.response.data&&t.response.data.errors?t.response.data.errors:e:(console.error("API ".concat(t.config.url," not found")),e)}},3678:function(t,e,n){"use strict";n("99af");var r=n("fce9");e["a"]={getAllCategories:function(t){return r["a"].get("/categories/?page=".concat(t))},getCategory:function(t){return r["a"].get("/categories/".concat(t))},getUserCategories:function(){return r["a"].get("/user-categories")},updateCategories:function(t){return r["a"].post("/users/category",t)},getCategoryBooks:function(t){return r["a"].get("/categorie-detail/".concat(t.category_id,"?page=").concat(t.page))}}},4360:function(t,e,n){"use strict";var r={};n.r(r),n.d(r,"namespaced",(function(){return S})),n.d(r,"state",(function(){return p})),n.d(r,"mutations",(function(){return O})),n.d(r,"actions",(function(){return R})),n.d(r,"getters",(function(){return h}));var o={};n.r(o),n.d(o,"namespaced",(function(){return v})),n.d(o,"state",(function(){return k})),n.d(o,"mutations",(function(){return N})),n.d(o,"actions",(function(){return G})),n.d(o,"getters",(function(){return D}));var a={};n.r(a),n.d(a,"namespaced",(function(){return I})),n.d(a,"state",(function(){return y})),n.d(a,"mutations",(function(){return M})),n.d(a,"actions",(function(){return j})),n.d(a,"getters",(function(){return x}));var u={};n.r(u),n.d(u,"namespaced",(function(){return U})),n.d(u,"state",(function(){return H})),n.d(u,"mutations",(function(){return V})),n.d(u,"actions",(function(){return Y})),n.d(u,"getters",(function(){return F}));var i={};n.r(i),n.d(i,"namespaced",(function(){return J})),n.d(i,"state",(function(){return Z})),n.d(i,"mutations",(function(){return tt})),n.d(i,"actions",(function(){return et})),n.d(i,"getters",(function(){return nt}));var c={};n.r(c),n.d(c,"namespaced",(function(){return ot})),n.d(c,"state",(function(){return ut})),n.d(c,"mutations",(function(){return it})),n.d(c,"actions",(function(){return ct})),n.d(c,"getters",(function(){return st}));var s={};n.r(s),n.d(s,"namespaced",(function(){return dt})),n.d(s,"state",(function(){return lt})),n.d(s,"mutations",(function(){return gt})),n.d(s,"actions",(function(){return mt})),n.d(s,"getters",(function(){return _t}));var d={};n.r(d),n.d(d,"namespaced",(function(){return Tt})),n.d(d,"state",(function(){return Ot})),n.d(d,"mutations",(function(){return Rt})),n.d(d,"actions",(function(){return ht})),n.d(d,"getters",(function(){return bt}));var f={};n.r(f),n.d(f,"namespaced",(function(){return At})),n.d(f,"state",(function(){return kt})),n.d(f,"mutations",(function(){return Nt})),n.d(f,"actions",(function(){return Gt})),n.d(f,"getters",(function(){return Dt}));var l=n("2b0e"),g=n("2f62"),m=(n("b0c0"),n("96cf"),n("1da1")),_=n("a18c"),E=n("2fa3"),T=n("b012"),S=!0,p={user:null,loading:!1,error:null},O={SET_USER:function(t,e){t.user=e},SET_LOADING:function(t,e){t.loading=e},SET_ERROR:function(t,e){t.error=e}},R={logout:function(t){var e=t.commit,n=t.dispatch;return T["a"].logout().then((function(){e("SET_USER",null),n("setGuest",{value:"isGuest"}),"login"!==_["a"].currentRoute.name&&_["a"].push({path:"/login"})})).catch((function(t){e("SET_ERROR",Object(E["a"])(t))}))},getAuthUser:function(t){return Object(m["a"])(regeneratorRuntime.mark((function e(){var n,r;return regeneratorRuntime.wrap((function(e){while(1)switch(e.prev=e.next){case 0:return n=t.commit,n("SET_LOADING",!0),e.prev=2,e.next=5,T["a"].getAuthUser();case 5:return r=e.sent,n("SET_USER",r.data.data),n("SET_LOADING",!1),e.abrupt("return",r.data.data);case 11:e.prev=11,e.t0=e["catch"](2),n("SET_LOADING",!1),n("SET_USER",null),n("SET_ERROR",Object(E["a"])(e.t0));case 16:case"end":return e.stop()}}),e,null,[[2,11]])})))()},setGuest:function(t,e){var n=e.value;window.localStorage.setItem("guest",n)}},h={authUser:function(t){return t.user},isAdmin:function(t){return!!t.user&&t.user.isAdmin},error:function(t){return t.error},loading:function(t){return t.loading},loggedIn:function(t){return!!t.user},guest:function(){var t=window.localStorage.getItem("guest");return!!t&&("isGuest"===t||"isNotGuest"!==t&&void 0)}},b=n("fce9"),A={getUser:function(t){return b["a"].get("/users/".concat(t))},getUsers:function(t){return b["a"].get("/users/?page=".concat(t))},paginateUsers:function(t){return b["a"].get(t)}},v=!0;function w(t,e){t("SET_USERS",e.data.data),t("SET_META",e.data.meta),t("SET_LINKS",e.data.links),t("SET_LOADING",!1)}var k={users:[],meta:null,links:null,loading:!1,error:null},N={SET_USERS:function(t,e){t.users=e},SET_META:function(t,e){t.meta=e},SET_LINKS:function(t,e){t.links=e},SET_LOADING:function(t,e){t.loading=e},SET_ERROR:function(t,e){t.error=e}},G={getUsers:function(t,e){var n=t.commit;n("SET_LOADING",!0),A.getUsers(e).then((function(t){w(n,t)})).catch((function(t){n("SET_LOADING",!1),n("SET_ERROR",Object(E["a"])(t))}))},paginateUsers:function(t,e){var n=t.commit;n("SET_LOADING",!0),A.paginateUsers(e).then((function(t){w(n,t)})).catch((function(t){n("SET_LOADING",!1),n("SET_ERROR",Object(E["a"])(t))}))}},D={users:function(t){return t.users},meta:function(t){return t.meta},links:function(t){return t.links},loading:function(t){return t.loading},error:function(t){return t.error}},L={getMessages:function(t){return b["a"].get("/messages/?page=".concat(t))},postMessage:function(t){return b["a"].post("/messages",t)},paginateMessages:function(t){return b["a"].get(t)}},I=!0;function C(t,e){t("SET_MESSAGES",e.data.data),t("SET_META",e.data.meta),t("SET_LINKS",e.data.links),t("SET_LOADING",!1)}var y={messages:[],meta:null,links:null,loading:!1,error:null},M={SET_MESSAGES:function(t,e){t.messages=e},SET_META:function(t,e){t.meta=e},SET_LINKS:function(t,e){t.links=e},SET_LOADING:function(t,e){t.loading=e},SET_ERROR:function(t,e){t.error=e}},j={getMessages:function(t,e){var n=t.commit;n("SET_LOADING",!0),L.getMessages(e).then((function(t){C(n,t)})).catch((function(t){n("SET_LOADING",!1),n("SET_ERROR",Object(E["a"])(t))}))},postMessage:function(t,e){var n=t.commit;return L.postMessage(e).then((function(t){C(n,t)}))},paginateMessages:function(t,e){var n=t.commit;n("SET_LOADING",!0),L.paginateMessages(e).then((function(t){C(n,t)})).catch((function(t){n("SET_LOADING",!1),n("SET_ERROR",Object(E["a"])(t))}))}},x={messages:function(t){return t.messages},meta:function(t){return t.meta},links:function(t){return t.links},loading:function(t){return t.loading},error:function(t){return t.error}},P=(n("99af"),{getBooks:function(t){return b["a"].get("/books/?page=".concat(t.page,"&languages=").concat(t.languages))},getRecommendedBooks:function(t){return b["a"].get("/recommended-books/?page=".concat(t.page,"&languages=").concat(t.languages))},postBook:function(t){return b["a"].post("/books",t)},paginateBooks:function(t){return b["a"].get(t)},getBook:function(t){return b["a"].get("/books/".concat(t.id))},postReview:function(t){return b["a"].post("/reviews",t)},updateReview:function(t){return b["a"].patch("/reviews/".concat(t.review_id),t)},deleteReview:function(t){return b["a"].delete("/reviews/".concat(t.id))}}),U=!0;function B(t,e){t("SET_BOOKS",e.data.data),t("SET_META",e.data.meta),t("SET_LINKS",e.data.links),t("SET_LOADING",!1)}function K(t,e){t("SET_PAGINATED_BOOKS",e.data.data),t("SET_META",e.data.meta),t("SET_LINKS",e.data.links),t("SET_LOADING",!1)}function W(t,e){t("SET_RECOMMENDED_BOOKS",e.data.data),t("SET_META",e.data.meta),t("SET_LINKS",e.data.links),t("SET_LOADING",!1)}function $(t,e){t("SET_PAGINATED_RECOMMENDED_BOOKS",e.data.data),t("SET_RECOMMENDED_META",e.data.meta),t("SET_RECOMMENDED_LINKS",e.data.links),t("SET_LOADING",!1)}var H={books:[],meta:null,links:null,recommended_books:[],recommended_meta:null,recommended_links:null,loading:!1,error:null,current_top_page:1,current_recommended_page:1,current_tab:1},V={SET_BOOKS:function(t,e){t.books=e},SET_PAGINATED_BOOKS:function(t,e){t.books=t.books.concat(e)},SET_RECOMMENDED_BOOKS:function(t,e){t.recommended_books=e},SET_PAGINATED_RECOMMENDED_BOOKS:function(t,e){t.recommended_books=t.recommended_books.concat(e)},SET_RECOMMENDED_META:function(t,e){t.recommended_meta=e},SET_RECOMMENDED_LINKS:function(t,e){t.recommended_links=e},SET_CURRENT_TOP_PAGE:function(t,e){t.current_top_page=e},SET_CURRENT_RECOMMENDED_PAGE:function(t,e){t.current_recommended_page=e},SET_CURRENT_TAB:function(t,e){t.current_tab=e},SET_META:function(t,e){t.meta=e},SET_LINKS:function(t,e){t.links=e},SET_LOADING:function(t,e){t.loading=e},SET_ERROR:function(t,e){t.error=e}},Y={getBooks:function(t,e){var n=t.commit;n("SET_LOADING",!0),P.getBooks(e).then((function(t){e.isPaginated?K(n,t):B(n,t)})).catch((function(t){n("SET_LOADING",!1),n("SET_ERROR",Object(E["a"])(t))}))},getRecommendedBooks:function(t,e){var n=t.commit;n("SET_LOADING",!0),P.getRecommendedBooks(e).then((function(t){e.isPaginated?$(n,t):W(n,t)})).catch((function(t){n("SET_LOADING",!1),n("SET_ERROR",Object(E["a"])(t))}))},postBook:function(t,e){var n=t.commit;return P.postBook(e).then((function(t){K(n,t)}))},paginateBooks:function(t,e){var n=t.commit;n("SET_LOADING",!0),P.paginateBooks(e).then((function(t){K(n,t)})).catch((function(t){n("SET_LOADING",!1),n("SET_ERROR",Object(E["a"])(t))}))},paginateRecommendedBooks:function(t,e){var n=t.commit;n("SET_LOADING",!0),P.paginateBooks(e).then((function(t){$(n,t)})).catch((function(t){n("SET_LOADING",!1),n("SET_ERROR",Object(E["a"])(t))}))},setCurrentTopPage:function(t,e){var n=t.commit;n("SET_CURRENT_TOP_PAGE",e)},setCurrentRecommendedPage:function(t,e){var n=t.commit;n("SET_CURRENT_RECOMMENDED_PAGE",e)},setCurrentTab:function(t,e){var n=t.commit;n("SET_CURRENT_TAB",e)}},F={books:function(t){return t.books},meta:function(t){return t.meta},current_top_page:function(t){return t.current_top_page},current_recommended_page:function(t){return t.current_recommended_page},current_tab:function(t){return t.current_tab},links:function(t){return t.links},recommended_books:function(t){return t.recommended_books},recommended_meta:function(t){return t.recommended_meta},recommended_links:function(t){return t.recommended_links},loading:function(t){return t.loading},error:function(t){return t.error}},q=n("3678"),J=!0;function z(t,e){t("SET_USER_CATEGORIES",e.data.data),t("SET_LOADING",!1)}function Q(t,e){t("SET_ALL_CATEGORIES",e.data.data),t("SET_LOADING",!1)}function X(t,e){t("SET_SELECTED_CATEGORY",e.data.data),t("SET_LOADING",!1)}var Z={user_categories:[],initial_selected_categories:[],all_categories:[],selected_category:null,loading:!1,error:null},tt={SET_USER_CATEGORIES:function(t,e){t.user_categories=e},SET_ALL_CATEGORIES:function(t,e){t.all_categories=e},SET_SELECTED_CATEGORY:function(t,e){t.selected_category=e},SET_LOADING:function(t,e){t.loading=e},SET_ERROR:function(t,e){t.error=e}},et={getUserCategories:function(t){var e=t.commit;e("SET_LOADING",!0),q["a"].getUserCategories().then((function(t){z(e,t)})).catch((function(t){e("SET_LOADING",!1),e("SET_ERROR",Object(E["a"])(t))}))},getAllCategories:function(t){var e=t.commit;e("SET_LOADING",!0),q["a"].getAllCategories().then((function(t){Q(e,t)})).catch((function(t){e("SET_LOADING",!1),e("SET_ERROR",Object(E["a"])(t))}))},getCategory:function(t,e){var n=t.commit;n("SET_LOADING",!0),q["a"].getCategory(e).then((function(t){X(n,t)})).catch((function(t){n("SET_LOADING",!1),n("SET_ERROR",Object(E["a"])(t))}))},setError:function(t,e){var n=t.commit;n("SET_ERROR",e)}},nt={user_categories:function(t){return t.user_categories},all_categories:function(t){return t.all_categories},selected_category:function(t){return t.selected_category},loading:function(t){return t.loading},error:function(t){return t.error}},rt={getAllLanguages:function(){return b["a"].get("/languages")}},ot=!0;function at(t,e){t("SET_LANGUAGES",e.data.data),t("SET_LOADING",!1)}var ut={all_languages:["myanmar","english"],loading:!1,error:null},it={SET_LANGUAGES:function(t,e){t.all_languages=e},SET_LOADING:function(t,e){t.loading=e},SET_ERROR:function(t,e){t.error=e}},ct={getLanguages:function(t){var e=t.commit;e("SET_LOADING",!0),rt.getAllLanguages().then((function(t){at(e,t)})).catch((function(t){e("SET_LOADING",!1),e("SET_ERROR",Object(E["a"])(t))}))},setError:function(t,e){var n=t.commit;n("SET_ERROR",e)}},st={all_languages:function(t){return t.all_languages},loading:function(t){return t.loading},error:function(t){return t.error}},dt=!0;function ft(t,e){t("SET_BOOK",e.data.data),t("SET_LOADING",!1)}var lt={book:null,loading:!1,error:null,message:null},gt={SET_BOOK:function(t,e){t.book=e},SET_LOADING:function(t,e){t.loading=e},SET_ERROR:function(t,e){t.error=e},SET_MESSAGE:function(t,e){t.message=e}},mt={getBook:function(t,e){var n=t.commit;n("SET_LOADING",!0),P.getBook({id:e}).then((function(t){ft(n,t)})).catch((function(t){n("SET_LOADING",!1),n("SET_ERROR",Object(E["a"])(t))}))},setBookValue:function(t,e){var n=t.commit;n("SET_LOADING",!0);try{ft(n,e)}catch(r){}},postReview:function(t,e){var n=t.commit;n("SET_LOADING",!0),P.postReview(e).then((function(t){ft(n,t),n("SET_MESSAGE","Posted your review.")})).catch((function(t){n("SET_LOADING",!1),n("SET_ERROR",Object(E["a"])(t))}))},updateReview:function(t,e){var n=t.commit;n("SET_LOADING",!0),P.updateReview(e).then((function(t){ft(n,t),n("SET_MESSAGE","Updated your review.")})).catch((function(t){n("SET_LOADING",!1),n("SET_ERROR",Object(E["a"])(t))}))},deleteReview:function(t,e){var n=t.commit;n("SET_LOADING",!0),P.deleteReview(e).then((function(t){ft(n,t),n("SET_MESSAGE","Deleted your review.")})).catch((function(t){n("SET_LOADING",!1),n("SET_ERROR",Object(E["a"])(t))}))},setError:function(t,e){var n=t.commit;n("SET_ERROR",e)},setMessage:function(t,e){var n=t.commit;n("SET_MESSAGE",e)}},_t={book:function(t){return t.book},loading:function(t){return t.loading},error:function(t){return t.error},message:function(t){return t.message}},Et=(n("4de4"),n("a440")),Tt=!0;function St(t,e){t("SET_WANT_TO_READS",e.data.data),t("SET_LOADING",!1),t("SET_META",e.data.meta),t("SET_LINKS",e.data.links)}function pt(t,e){t("SET_WANT_TO_READ",e.data.data),t("SET_LOADING",!1)}var Ot={user_want_to_reads:[],want_to_reads:[],want_to_read_loading:!1,want_to_read_error:null,meta:null,links:null,error:null,message:null,current_page:1},Rt={SET_META:function(t,e){t.meta=e},SET_LINKS:function(t,e){t.links=e},SET_PAGE:function(t,e){t.current_page=e},SET_WANT_TO_READS:function(t,e){t.want_to_reads=t.want_to_reads.concat(e)},SET_WANT_TO_READ:function(t,e){t.user_want_to_reads=e},REMOVE_WANT_TO_READS:function(t,e){t.want_to_reads=t.want_to_reads.filter((function(t){return t.id!=e}))},SET_LOADING:function(t,e){t.want_to_read_loading=e},SET_ERROR:function(t,e){t.want_to_read_error=e},SET_MESSAGE:function(t,e){t.message=e},CLEAR_WANT_TO_READS:function(t){t.want_to_reads=[]}},ht={getWantToReads:function(t,e){var n=t.commit;n("SET_LOADING",!0),Et["a"].getWantToReads(e).then((function(t){St(n,t)})).catch((function(t){n("SET_LOADING",!1),n("SET_ERROR",Object(E["a"])(t))}))},getWantToRead:function(t,e){var n=t.commit;n("SET_LOADING",!0),Et["a"].getWantToRead(e).then((function(t){pt(n,t)})).catch((function(t){n("SET_LOADING",!1),n("SET_ERROR",Object(E["a"])(t))}))},updateWantToRead:function(t,e){var n=t.commit;return Et["a"].updateWantToRead(e).then((function(t){St(n,t)}))},storeWantToRead:function(t,e){var n=t.commit;return Et["a"].storeWantToRead(e).then((function(t){St(n,t)}))},deleteWantToRead:function(t,e){var n=t.commit;return Et["a"].deleteWantToRead(e).then((function(t){St(n,t)}))},removeWantToRead:function(t,e){var n=t.commit;n("REMOVE_WANT_TO_READS",e.book_id)},setError:function(t,e){var n=t.commit;n("SET_ERROR",e)},setMessage:function(t,e){var n=t.commit;n("SET_MESSAGE",e)},setLoading:function(t,e){var n=t.commit;n("SET_LOADING",e)},setCurrentPage:function(t,e){var n=t.commit;n("SET_PAGE",e)},clearWantToReads:function(t){var e=t.commit;e("CLEAR_WANT_TO_READS"),e("SET_META",null),e("SET_LINKS",null)}},bt={want_to_reads:function(t){return t.want_to_reads},user_want_to_reads:function(t){return t.user_want_to_reads},want_to_read_loading:function(t){return t.want_to_read_loading},want_to_read_error:function(t){return t.want_to_read_error},meta:function(t){return t.meta},links:function(t){return t.links},current_page:function(t){return t.current_page},error:function(t){return t.error},message:function(t){return t.message}},At=!0;function vt(t,e){t("PAGINATE_BOOKS",e.data.data),t("SET_LOADING",!1),t("SET_META",e.data.meta),t("SET_LINKS",e.data.links)}function wt(t,e){t("SET_CATEGORY",e.data.data),t("SET_LOADING",!1)}var kt={category:null,books:[],books_meta:null,books_links:null,loading:!1,error:null,message:null,current_page:1},Nt={SET_CATEGORY:function(t,e){t.category=e},SET_LOADING:function(t,e){t.loading=e},SET_ERROR:function(t,e){t.error=e},PAGINATE_BOOKS:function(t,e){t.books=t.books.concat(e)},SET_META:function(t,e){t.books_meta=e},SET_LINKS:function(t,e){t.books_links=e},SET_PAGE:function(t,e){t.current_page=e}},Gt={getCategory:function(t,e){var n=t.commit;n("SET_LOADING",!0),q["a"].getCategory(e).then((function(t){wt(n,t)})).catch((function(t){n("SET_LOADING",!1),n("SET_ERROR",Object(E["a"])(t))}))},getCategoryBooks:function(t,e){var n=t.commit;n("SET_LOADING",!0),q["a"].getCategoryBooks(e).then((function(t){vt(n,t)})).catch((function(t){n("SET_LOADING",!1),n("SET_ERROR",Object(E["a"])(t))}))},setError:function(t,e){var n=t.commit;n("SET_ERROR",e)},setLoading:function(t,e){var n=t.commit;n("SET_LOADING",e)},setCurrentPage:function(t,e){var n=t.commit;n("SET_PAGE",e)}},Dt={category:function(t){return t.category},books:function(t){return t.books},loading:function(t){return t.loading},error:function(t){return t.error},message:function(t){return t.message},books_links:function(t){return t.links},books_meta:function(t){return t.books_meta},current_page:function(t){return t.current_page}};l["a"].use(g["a"]);e["a"]=new g["a"].Store({strict:!0,modules:{auth:r,user:o,message:a,book:u,category:i,language:c,bookDetail:s,wantToRead:d,categoryDetail:f}})},"56d7":function(t,e,n){"use strict";n.r(e);n("e260"),n("e6cf"),n("cca6"),n("a79d");var r=n("2b0e"),o=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{attrs:{id:"app"}},[n("main",{staticClass:"container mb-20"},[n("router-view")],1),t.isLoggedIn?n("Menu"):t._e()],1)},a=[],u=(n("b0c0"),function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("header",{staticClass:"p-2 text-white bg-blue-400 bottom-0 fixed left-0 right-0 h-12 flex items-center"},[n("nav",{staticClass:"container flex items-center mx-auto"},[n("div",{staticClass:"flex-1 flex  justify-center"},[n("router-link",{staticClass:"flex justify-center items-center",class:{"text-green-700":t.isHome},attrs:{to:"/dashboard"}},[n("font-awesome-icon",{staticClass:"text-lg self-center",attrs:{icon:"fa-solid fa-house"}}),n("p",{staticClass:"ml-1"},[t._v("Home")])],1)],1),n("div",{staticClass:"flex-1 flex  justify-center"},[n("router-link",{staticClass:"flex justify-center items-center",class:{"text-green-700":t.isCategories},attrs:{to:"/category"}},[n("font-awesome-icon",{staticClass:"text-lg",attrs:{icon:"fa-solid fa-book"}}),n("p",{staticClass:"ml-1"},[t._v("Categories")])],1)],1),n("div",{staticClass:"flex-1 flex  justify-center"},[n("router-link",{staticClass:"flex justify-center items-center",class:{"text-green-700":t.isWantToRead},attrs:{to:"/want-to-read"}},[n("font-awesome-icon",{staticClass:"text-lg",attrs:{icon:"fa-solid fa-book"}}),n("p",{staticClass:"ml-1"},[t._v("Saved")])],1)],1),n("div",{staticClass:"flex-1 flex  justify-center"},[n("router-link",{staticClass:"flex justify-center items-center",class:{"text-green-700":"user"==t.currentRoute},attrs:{to:"/user"}},[n("font-awesome-icon",{staticClass:"text-lg",attrs:{icon:"fa-solid fa-gears"}}),n("p",{staticClass:"ml-1"},[t._v("Settings")])],1)],1)])])}),i=[],c=n("5530"),s=n("2f62"),d={name:"Header",computed:Object(c["a"])(Object(c["a"])({},Object(s["b"])("auth",["authUser","isAdmin"])),{},{currentRoute:function(){return this.$route.name},isCategories:function(){var t=this.$route.name;return/^categor.*/.test(t)},isHome:function(){var t=this.$route.name;return/^book.*|dashboard/.test(t)},isWantToRead:function(){var t=this.$route.name;return/^want.*/.test(t)}})},f=d,l=n("2877"),g=Object(l["a"])(f,u,i,!1,null,null,null),m=g.exports,_={name:"app",components:{Menu:m},computed:{isLoggedIn:function(){return"login"!=this.$route.name&&"register"!=this.$route.name}}},E=_,T=(n("034f"),Object(l["a"])(E,o,a,!1,null,null,null)),S=T.exports,p=n("a18c"),O=n("4360"),R=(n("def6"),n("ecee")),h=n("ad3d"),b=n("c074"),A=n("b702");R["c"].add(b["f"],b["b"],b["e"],b["h"],b["g"],b["c"],b["a"],b["j"],A["a"],b["k"],b["i"],b["d"],b["l"]),r["a"].component("font-awesome-icon",h["a"]),r["a"].config.productionTip=!1,new r["a"]({router:p["a"],store:O["a"],render:function(t){return t(S)}}).$mount("#app")},"85ec":function(t,e,n){},a18c:function(t,e,n){"use strict";n("d3b7");var r=n("5530"),o=n("2b0e"),a=n("4360"),u=n("8c4f");function i(t){var e=t.to,n=t.next,r=t.store,o={path:"/login",query:{redirect:e.fullPath}};r.getters["auth/authUser"]?n():r.dispatch("auth/getAuthUser").then((function(){r.getters["auth/authUser"]?n():n(o)}))}function c(t){var e=t.next,n=t.store;n.getters["auth/isAdmin"]?e():e({name:"notFound"})}function s(t){var e=t.next,n=t.store,r=window.localStorage.getItem("guest");"isNotGuest"!==r||n.getters["auth/authUser"]?e():n.dispatch("auth/getAuthUser").then((function(){n.getters["auth/authUser"]?e({name:"dashboard"}):(n.dispatch("auth/setGuest",{value:"isGuest"}),e())}))}function d(t,e,n){var o=e[n];return o?function(){o(Object(r["a"])(Object(r["a"])({},t),{},{next:d(t,e,n+1)}))}:t.next}o["a"].use(u["a"]);var f=[{path:"/",name:"home",meta:{middleware:[s]},component:function(){return n.e("home").then(n.bind(null,"bb51"))}},{path:"/dashboard",name:"dashboard",meta:{middleware:[i]},component:function(){return n.e("dashboard").then(n.bind(null,"7277"))}},{path:"/category",name:"category",meta:{middleware:[i]},component:function(){return n.e("dashboard").then(n.bind(null,"4886"))}},{path:"/want-to-read",name:"want-to-read",meta:{middleware:[i]},component:function(){return n.e("dashboard").then(n.bind(null,"38c0"))}},{path:"/category-detail/:id",name:"category-detail",meta:{middleware:[i]},component:function(){return n.e("dashboard").then(n.bind(null,"f7dd"))}},{path:"/book-detail/:id",name:"book-detail",meta:{middleware:[i]},component:function(){return n.e("dashboard").then(n.bind(null,"1253"))}},{path:"/category-book-detail/:id",name:"category-book-detail",meta:{middleware:[i]},component:function(){return n.e("dashboard").then(n.bind(null,"1253"))}},{path:"/want-to-read-book-detail/:id",name:"want-to-read-book-detail",meta:{middleware:[i]},component:function(){return n.e("dashboard").then(n.bind(null,"1253"))}},{path:"/update-category",name:"updateCategory",meta:{middleware:[i]},component:function(){return n.e("not-found").then(n.bind(null,"957d"))}},{path:"/user",name:"user",meta:{middleware:[i]},component:function(){return Promise.all([n.e("forgot-password~login~register~user"),n.e("user")]).then(n.bind(null,"1511"))}},{path:"/users",name:"users",meta:{middleware:[i,c]},component:function(){return n.e("users").then(n.bind(null,"ed81"))}},{path:"/login",name:"login",meta:{middleware:[s]},component:function(){return Promise.all([n.e("forgot-password~login~register~user"),n.e("login")]).then(n.bind(null,"a55b"))}},{path:"/register",name:"register",meta:{middleware:[s]},component:function(){return Promise.all([n.e("forgot-password~login~register~user"),n.e("register")]).then(n.bind(null,"73cf"))}},{path:"/reset-password",name:"resetPassword",meta:{middleware:[s]},component:function(){return n.e("reset-password").then(n.bind(null,"0813"))}},{path:"/forgot-password",name:"forgotPassword",meta:{middleware:[s]},component:function(){return Promise.all([n.e("forgot-password~login~register~user"),n.e("forgot-password")]).then(n.bind(null,"f243"))}},{path:"/:catchAll(.*)",name:"notFound",component:function(){return n.e("not-found").then(n.bind(null,"9703"))}}],l=new u["a"]({mode:"history",routes:f,scrollBehavior:function(t,e,n){return n||{x:0,y:0}}});l.beforeEach((function(t,e,n){var o=t.meta.middleware,u={to:t,from:e,next:n,store:a["a"]};if(!o)return n();o[0](Object(r["a"])(Object(r["a"])({},u),{},{next:d(u,o,1)}))}));e["a"]=l},a440:function(t,e,n){"use strict";var r=n("fce9");e["a"]={getAllCategories:function(t){return r["a"].get("/categories/?page=".concat(t))},getCategory:function(t){return r["a"].get("/categories/".concat(t))},getWantToReads:function(t){return r["a"].get("/want-to-reads/?page=".concat(t.page))},getWantToRead:function(t){return r["a"].get("/want-to-reads/".concat(t.book_id))},updateWantToRead:function(t){return r["a"].post("/want-to-reads/sync",t)},storeWantToRead:function(t){return r["a"].post("/want-to-reads",t)},deleteWantToRead:function(t){return r["a"].delete("/want-to-reads/".concat(t.book_id))}}},b012:function(t,e,n){"use strict";n("caad"),n("d3b7"),n("96cf");var r=n("1da1"),o=n("bc3a"),a=n.n(o),u=n("4360"),i=a.a.create({baseURL:"https://polar-island-51022.herokuapp.com",withCredentials:!0});i.interceptors.response.use((function(t){return t}),(function(t){return t.response&&[401,419].includes(t.response.status)&&u["a"].getters["auth/authUser"]&&!u["a"].getters["auth/guest"]&&u["a"].dispatch("auth/logout"),Promise.reject(t)})),e["a"]={login:function(t){return Object(r["a"])(regeneratorRuntime.mark((function e(){return regeneratorRuntime.wrap((function(e){while(1)switch(e.prev=e.next){case 0:return e.next=2,i.get("/sanctum/csrf-cookie");case 2:return e.abrupt("return",i.post("/login",t));case 3:case"end":return e.stop()}}),e)})))()},logout:function(){return i.post("/logout")},forgotPassword:function(t){return Object(r["a"])(regeneratorRuntime.mark((function e(){return regeneratorRuntime.wrap((function(e){while(1)switch(e.prev=e.next){case 0:return e.next=2,i.get("/sanctum/csrf-cookie");case 2:return e.abrupt("return",i.post("/forgot-password",t));case 3:case"end":return e.stop()}}),e)})))()},getAuthUser:function(){return i.get("/api/users/auth")},resetPassword:function(t){return Object(r["a"])(regeneratorRuntime.mark((function e(){return regeneratorRuntime.wrap((function(e){while(1)switch(e.prev=e.next){case 0:return e.next=2,i.get("/sanctum/csrf-cookie");case 2:return e.abrupt("return",i.post("/reset-password",t));case 3:case"end":return e.stop()}}),e)})))()},updatePassword:function(t){return i.put("/user/password",t)},registerUser:function(t){return Object(r["a"])(regeneratorRuntime.mark((function e(){return regeneratorRuntime.wrap((function(e){while(1)switch(e.prev=e.next){case 0:return e.next=2,i.get("/sanctum/csrf-cookie");case 2:return e.abrupt("return",i.post("/register",t));case 3:case"end":return e.stop()}}),e)})))()},sendVerification:function(t){return i.post("/email/verification-notification",t)},updateUser:function(t){return i.put("/user/profile-information",t)}}},def6:function(t,e,n){},fce9:function(t,e,n){"use strict";n.d(e,"a",(function(){return u}));n("caad"),n("d3b7");var r=n("bc3a"),o=n.n(r),a=n("4360"),u=o.a.create({baseURL:"https://polar-island-51022.herokuapp.com/api",withCredentials:!0});u.interceptors.response.use((function(t){return t}),(function(t){return t.response&&[401,419].includes(t.response.status)&&a["a"].getters["auth/authUser"]&&!a["a"].getters["auth/guest"]&&a["a"].dispatch("auth/logout"),Promise.reject(t)}))}});
//# sourceMappingURL=app.97291c4e.js.map