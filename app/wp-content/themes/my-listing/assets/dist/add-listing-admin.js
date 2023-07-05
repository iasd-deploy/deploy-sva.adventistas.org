!function(e){"function"==typeof define&&define.amd?define("addListingAdmin",e):e()}(function(){"use strict";jQuery(function(t){t(".file-upload-field.multiple-uploads .job-manager-uploaded-files").sortable({helper:"clone",appendTo:document.body}),t('.c27-work-hours .day-wrapper .work-hours-type input[type="radio"]').on("change",function(e){t(this).val();t(this).parents(".day-wrapper").removeClass(["day-status-enter-hours","day-status-closed-all-day","day-status-open-all-day","day-status-by-appointment-only"].join(" ")).addClass("day-status-"+t(this).val())})}),jQuery(function(k){k(".event-picker").each(function(){var t=k(this),e=t.data("dates"),d=t.data("key"),a=t.data("limit"),o="no"!==t.data("timepicker"),M=t.data("l10n"),s=t.find(".dates-list"),n=t.find(".date-add-new"),i=e.length+1,l=t.find(".datetpl").text();function r(){var e=t.find(".single-date").length;a<=e?n.hide():n.show(),e<1&&c()}function c(){p({start:"",end:"",repeat:!1,frequency:2,unit:"weeks",until:moment().add(1,"years").locale("en").format("YYYY-MM-DD"),index:i++})}function p(e){var t=k(l.replace(/{date}/g,d+"["+e.index+"]")),u=t.find(".is-recurring input"),f=t.find(".date-start input"),m=t.find(".date-end input"),g=t.find(".repeat-frequency input"),v=t.find(".repeat-unit"),h=t.find(".repeat-message"),y=t.find(".repeat-end input");function a(){if(u.prop("checked")){var e=f.val(),t=m.val(),a=y.val(),n=parseInt(g.val(),10),i=v.find("input:checked").val();if(e.length&&t.length&&a.length&&n){e=moment(e),t=moment(t),(a=moment(a)).set({hour:23,minute:59,second:59}),"weeks"===i&&(i="days",n*=7),"years"===i&&(i="months",n*=12);for(var d=Math.abs(e.diff(a,i)),o=Math.floor(d/n),s=[],l=1;l<Math.min(o+1,6);l++){var r=e.clone().add(n*l,i),c=t.clone().add(n*l,i);s.push("".concat(r.format(CASE27.l10n.datepicker.format)," - ").concat(c.format(CASE27.l10n.datepicker.format)))}var p=M.next_five.replace("%d",o);o<1?p=M.no_recurrences:o<5&&(p=M.next_recurrences),h.show().html("<span>".concat(p,"</span><ul><li>").concat(s.join("</li><li>"),"</li></ul>"))}else h.hide()}}f.val(e.start),m.val(e.end),u.prop("checked",e.repeat),g.val(e.frequency),v.find('input[value="'.concat(e.unit,'"]')).prop("checked",!0),y.val(e.until),e.repeat&&t.find(".recurrence").addClass("is-open"),u.on("change",function(){a(),k(this).prop("checked")?t.find(".recurrence").addClass("is-open"):t.find(".recurrence").removeClass("is-open")});new MyListing.Datepicker(f,{timepicker:o});var n=new MyListing.Datepicker(m,{timepicker:o}),i=new MyListing.Datepicker(y);e.start&&t.find(".date-start").removeClass("date-empty"),e.end&&t.find(".date-end").removeClass("date-empty"),f.on("datepicker:change",function(e){n.setMinDate(moment(e.detail.value)),i.setMinDate(moment(e.detail.value)),a(),e.detail.value?t.find(".date-start").removeClass("date-empty"):t.find(".date-start").addClass("date-empty")}),m.on("datepicker:change",function(e){a(),e.detail.value?t.find(".date-end").removeClass("date-empty"):t.find(".date-end").addClass("date-empty")}),y.on("datepicker:change",a),g.on("input",a),v.find("input").on("change",a),a(),s.append(t)}e.forEach(function(e,t){p({start:e.start,end:e.end,repeat:e.repeat,frequency:e.repeat?e.frequency:2,unit:e.repeat?e.unit:"weeks",until:e.repeat?e.until:moment(e.start).add(1,"years").locale("en").format("YYYY-MM-DD"),index:t})}),e.length||c(),n.click(function(e){e.preventDefault(),p({start:"",end:"",repeat:!1,frequency:2,unit:"weeks",until:moment().add(1,"years").locale("en").format("YYYY-MM-DD"),index:i++}),r()}),k(this).on("click",".remove-date",function(e){e.preventDefault(),k(this).parents(".single-date").remove(),r()}),r()})}),jQuery(function(d){d(".listing-form-field .file-upload-field").on("click",".remove-uploaded-file",function(e){e.preventDefault(),d(this).parents(".uploaded-file").remove()}),d(".listing-form-field .file-upload-field").on("dblclick",".uploaded-file",function(e){e.preventDefault(),"hidden"===d(this).find("input").attr("type")?d(this).find("input").attr("type","text"):d(this).find("input").attr("type","hidden")}),d(".listing-form-field .listing-file-upload-input").click(function(e){e.preventDefault();var a=d(this).parents(".file-upload-field").find(".job-manager-uploaded-files"),n=d(this).data("name"),i="yes"===d(this).data("multiple");if(d(this).data("file_frame"))d(this).data("file_frame").open();else{var t=wp.media.frames.file_frame=wp.media({multiple:!0});t.open(),d(this).data("file_frame",t),t.on("select",function(){t.state().get("selection").each(function(e){var t;"image"===(e=e.toJSON()).type?(t=d('\n\t\t<div class="uploaded-file">\n\t\t\t<span class="uploaded-image-preview"></span>\n\t\t\t<a class="remove-uploaded-file"><i class="mi delete"></i></a>\n\t\t\t<input type="hidden" class="input-text">\n\t\t</div>')).find(".uploaded-image-preview").css("background-image",'url("'+e.url+'")'):(t=d('\n\t\t<div class="uploaded-file">\n\t\t\t<span class="uploaded-file-preview">\n\t\t\t\t<i class="mi insert_drive_file uploaded-file-icon"></i>\n\t\t\t\t<code></code>\n\t\t\t</span>\n\t\t\t<a class="remove-uploaded-file"><i class="mi delete"></i></a>\n\t\t\t<input type="hidden" class="input-text">\n\t\t</div>')).find("code").text(e.filename);t.find("input").attr("name","current_"+n).val(e.encoded_guid),i?a.append(t):a.html(t)})})}})}),jQuery(function(M){MyListing.Maps&&MyListing.Maps.loaded&&(M(".repeater-custom").each(function(e,t){var h=parseInt(M(t).data("max"),10),y=M(t).find(".add-location");M(t).repeater({initEmpty:!0,ready:function(e){},hide:function(e){var a=M(this).find(".location-field-wrapper").data("index");MyListing.Maps.instances;MyListing.Maps.instances.forEach(function(e,t){e.id==a&&delete MyListing.Maps.instances[t]}),MyListing.Maps.instances=MyListing.Maps.instances.filter(function(e){return null!==e}),e(),M("div[data-repeater-item] > .location-field-wrapper").length>=h?y.hide():y.show()},show:function(){var e=this;M(e).show();var t=M("div[data-repeater-item] > .location-field-wrapper"),a=M(e).find(".delete-repeater-item");if(t.length>=h?y.hide():y.show(),1==h?a.hide():a.show(),t.eq(-2).length){var n=t.eq(-2).data("index");M(e).find(".location-field-wrapper").attr("data-index",n+1),M(e).find(".location-picker-custom-map").attr("id",n+1)}else M(e).find(".location-field-wrapper").attr("data-index",t.length-1),M(e).find(".location-picker-custom-map").attr("id",t.length-1);new MyListing.Maps.Map(M(e).find(".c27-custom-map").get(0)),new MyListing.Maps.Autocomplete(M(e).find(".address-field").get(0));var i=M(e).find(".location-field-wrapper"),d=M(e).find(".location-picker-custom-map").attr("id"),o=MyListing.Maps.getInstance(d).instance;M(e).find(".cts-custom-get-location").on("click",function(e){e.preventDefault();var t=jQuery(jQuery(this).parents(".repeater-item"));t.find(".cts-custom-get-location").length&&(o&&MyListing.Geocoder.setMap(o.instance),MyListing.Geocoder.getUserLocation({receivedAddress:function(e){if(t.find(".address-field").val(e.address),t.find(".address-field").data("autocomplete"))return t.find(".address-field").data("autocomplete").fireChangeEvent(e)}}))});var s=i.data("options"),l=i.find(".location-coords"),r=i.find(".latitude-input"),c=i.find(".longitude-input"),p=i.find(".address-field"),u=i.find('.lock-pin input[type="checkbox"]'),f=i.find(".enter-coordinates-toggle > span"),m=new MyListing.Maps.Marker({position:v(),map:o,template:{type:"traditional"}});function g(){var e=v();m.setPosition(e),o.panTo(e),""!==r.val().trim()&&""!==c.val().trim()&&(r.val(e.getLatitude()),c.val(e.getLongitude()))}function v(){return r.val().trim()&&c.val().trim()?new MyListing.Maps.LatLng(r.val(),c.val()):new MyListing.Maps.LatLng(s["default-lat"],s["default-lng"])}o.addListener("click",function(e){if(!u.prop("checked")){var t=o.getClickPosition(e);m.setPosition(t),r.val(t.getLatitude()),c.val(t.getLongitude()),MyListing.Geocoder.geocode(t.toGeocoderFormat(),function(e){e&&p.val(e.address)})}}),p.on("autocomplete:change",function(e){if(!u.prop("checked")&&e.detail.place&&e.detail.place.latitude&&e.detail.place.longitude){var t=new MyListing.Maps.LatLng(e.detail.place.latitude,e.detail.place.longitude);m.setPosition(t),r.val(e.detail.place.latitude),c.val(e.detail.place.longitude),o.panTo(t)}}),o.addListenerOnce("idle",function(e){o.setZoom(s["default-zoom"])}),u.on("change",function(e){o.trigger("resize"),o.setCenter(v())}).change(),f.click(function(e){l.toggleClass("hide")}),r.blur(g),c.blur(g)}}).setList(M(t).data("list"))}),jQuery(".field-type-location .address-field").each(function(e,t){new MyListing.Maps.Autocomplete(t)}),jQuery(".cts-custom-get-location").each(function(e,t){jQuery(t).on("click",function(e){e.preventDefault();var t=jQuery(jQuery(this).parent(".repeater-item")),a=null;t.find(".cts-custom-get-location").length&&((a=MyListing.Maps.getInstance(jQuery(this)))&&MyListing.Geocoder.setMap(a.instance),MyListing.Geocoder.getUserLocation({receivedAddress:function(e){if(t.find(".cts-custom-get-location").val(e.address),t.find(".cts-custom-get-location").data("autocomplete"))return t.find(".cts-custom-get-location").data("autocomplete").fireChangeEvent(e)}}))})}))}),jQuery(function(a){a(".c27-work-hours .bl-tabs-menu a").on("click",function(e){e.preventDefault();var t=a(this).attr("href");a(".c27-work-hours .tab-pane").removeClass("active"),a(".c27-work-hours .tab-pane"+t).addClass("active"),a(this).parent().addClass("active").siblings().removeClass("active")})})});
